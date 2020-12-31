<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BusinessProfile\BulkDestroyBusinessProfile;
use App\Http\Requests\Admin\BusinessProfile\DestroyBusinessProfile;
use App\Http\Requests\Admin\BusinessProfile\IndexBusinessProfile;
use App\Http\Requests\Admin\BusinessProfile\StoreBusinessProfile;
use App\Http\Requests\Admin\BusinessProfile\UpdateBusinessProfile;
use App\Models\BusinessProfile;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class BusinessProfileController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexBusinessProfile $request
     * @return array|Factory|View
     */
    public function index(IndexBusinessProfile $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(BusinessProfile::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'user_id', 'datetime', 'name', 'phone', 'address', 'latlng', 'discription', 'products_services', 'keywords', 'comments', 'published_id', 'currency', 'status'],

            // set columns to searchIn
            ['id', 'user_id', 'datetime', 'name', 'phone', 'address', 'latlng', 'discription', 'products_services', 'keywords', 'comments', 'published_id', 'currency', 'status']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.business-profile.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.business-profile.create');

        return view('admin.business-profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBusinessProfile $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreBusinessProfile $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the BusinessProfile
        $businessProfile = BusinessProfile::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/business-profiles'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/business-profiles');
    }

    /**
     * Display the specified resource.
     *
     * @param BusinessProfile $businessProfile
     * @throws AuthorizationException
     * @return void
     */
    public function show(BusinessProfile $businessProfile)
    {
        $this->authorize('admin.business-profile.show', $businessProfile);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param BusinessProfile $businessProfile
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(BusinessProfile $businessProfile)
    {
        $this->authorize('admin.business-profile.edit', $businessProfile);


        return view('admin.business-profile.edit', [
            'businessProfile' => $businessProfile,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBusinessProfile $request
     * @param BusinessProfile $businessProfile
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateBusinessProfile $request, BusinessProfile $businessProfile)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values BusinessProfile
        $businessProfile->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/business-profiles'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/business-profiles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyBusinessProfile $request
     * @param BusinessProfile $businessProfile
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyBusinessProfile $request, BusinessProfile $businessProfile)
    {
        $businessProfile->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyBusinessProfile $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyBusinessProfile $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    BusinessProfile::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
