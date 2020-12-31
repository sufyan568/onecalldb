<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GeoVar\BulkDestroyGeoVar;
use App\Http\Requests\Admin\GeoVar\DestroyGeoVar;
use App\Http\Requests\Admin\GeoVar\IndexGeoVar;
use App\Http\Requests\Admin\GeoVar\StoreGeoVar;
use App\Http\Requests\Admin\GeoVar\UpdateGeoVar;
use App\Models\GeoVar;
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

class GeoVarsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexGeoVar $request
     * @return array|Factory|View
     */
    public function index(IndexGeoVar $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(GeoVar::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'datetime', 'comments', 'name', 'description', 'lat1', 'lng1', 'lat2', 'lng2', 'tpl_var', 'tpl_val'],

            // set columns to searchIn
            ['id', 'datetime', 'comments', 'name', 'description', 'lat1', 'lng1', 'lat2', 'lng2', 'tpl_var', 'tpl_val']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.geo-var.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.geo-var.create');

        return view('admin.geo-var.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreGeoVar $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreGeoVar $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the GeoVar
        $geoVar = GeoVar::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/geo-vars'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/geo-vars');
    }

    /**
     * Display the specified resource.
     *
     * @param GeoVar $geoVar
     * @throws AuthorizationException
     * @return void
     */
    public function show(GeoVar $geoVar)
    {
        $this->authorize('admin.geo-var.show', $geoVar);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param GeoVar $geoVar
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(GeoVar $geoVar)
    {
        $this->authorize('admin.geo-var.edit', $geoVar);


        return view('admin.geo-var.edit', [
            'geoVar' => $geoVar,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateGeoVar $request
     * @param GeoVar $geoVar
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateGeoVar $request, GeoVar $geoVar)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values GeoVar
        $geoVar->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/geo-vars'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/geo-vars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyGeoVar $request
     * @param GeoVar $geoVar
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyGeoVar $request, GeoVar $geoVar)
    {
        $geoVar->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyGeoVar $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyGeoVar $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    GeoVar::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
