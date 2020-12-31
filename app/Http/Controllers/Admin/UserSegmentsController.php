<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserSegment\BulkDestroyUserSegment;
use App\Http\Requests\Admin\UserSegment\DestroyUserSegment;
use App\Http\Requests\Admin\UserSegment\IndexUserSegment;
use App\Http\Requests\Admin\UserSegment\StoreUserSegment;
use App\Http\Requests\Admin\UserSegment\UpdateUserSegment;
use App\Models\UserSegment;
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

class UserSegmentsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexUserSegment $request
     * @return array|Factory|View
     */
    public function index(IndexUserSegment $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(UserSegment::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'datetime', 'name', 'description', 'query', 'comments'],

            // set columns to searchIn
            ['id', 'datetime', 'name', 'description', 'query', 'comments']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.user-segment.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.user-segment.create');

        return view('admin.user-segment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreUserSegment $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreUserSegment $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the UserSegment
        $userSegment = UserSegment::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/user-segments'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/user-segments');
    }

    /**
     * Display the specified resource.
     *
     * @param UserSegment $userSegment
     * @throws AuthorizationException
     * @return void
     */
    public function show(UserSegment $userSegment)
    {
        $this->authorize('admin.user-segment.show', $userSegment);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param UserSegment $userSegment
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(UserSegment $userSegment)
    {
        $this->authorize('admin.user-segment.edit', $userSegment);


        return view('admin.user-segment.edit', [
            'userSegment' => $userSegment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateUserSegment $request
     * @param UserSegment $userSegment
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateUserSegment $request, UserSegment $userSegment)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values UserSegment
        $userSegment->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/user-segments'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/user-segments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyUserSegment $request
     * @param UserSegment $userSegment
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyUserSegment $request, UserSegment $userSegment)
    {
        $userSegment->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyUserSegment $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyUserSegment $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    UserSegment::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
