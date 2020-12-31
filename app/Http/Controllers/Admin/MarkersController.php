<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Marker\BulkDestroyMarker;
use App\Http\Requests\Admin\Marker\DestroyMarker;
use App\Http\Requests\Admin\Marker\IndexMarker;
use App\Http\Requests\Admin\Marker\StoreMarker;
use App\Http\Requests\Admin\Marker\UpdateMarker;
use App\Models\Marker;
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

class MarkersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexMarker $request
     * @return array|Factory|View
     */
    public function index(IndexMarker $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Marker::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'place_id', 'name', 'tel_country_code', 'phone', 'address', 'city', 'region', 'country', 'lat', 'lng', 'timezone', 'photo_urls'],

            // set columns to searchIn
            ['id', 'place_id', 'name', 'tel_country_code', 'phone', 'address', 'city', 'region', 'country', 'lat', 'lng', 'timezone', 'photo_urls']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.marker.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.marker.create');

        return view('admin.marker.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreMarker $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreMarker $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Marker
        $marker = Marker::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/markers'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/markers');
    }

    /**
     * Display the specified resource.
     *
     * @param Marker $marker
     * @throws AuthorizationException
     * @return void
     */
    public function show(Marker $marker)
    {
        $this->authorize('admin.marker.show', $marker);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Marker $marker
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Marker $marker)
    {
        $this->authorize('admin.marker.edit', $marker);


        return view('admin.marker.edit', [
            'marker' => $marker,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMarker $request
     * @param Marker $marker
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateMarker $request, Marker $marker)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Marker
        $marker->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/markers'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/markers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyMarker $request
     * @param Marker $marker
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyMarker $request, Marker $marker)
    {
        $marker->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyMarker $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyMarker $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Marker::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
