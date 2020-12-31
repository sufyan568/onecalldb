<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Query\BulkDestroyQuery;
use App\Http\Requests\Admin\Query\DestroyQuery;
use App\Http\Requests\Admin\Query\IndexQuery;
use App\Http\Requests\Admin\Query\StoreQuery;
use App\Http\Requests\Admin\Query\UpdateQuery;
use App\Models\Query;
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

class QueriesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexQuery $request
     * @return array|Factory|View
     */
    public function index(IndexQuery $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Query::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'datetime', 'latlng', 'from', 'categogry', 'type', 'status', 'comments'],

            // set columns to searchIn
            ['id', 'datetime', 'latlng', 'from', 'categogry', 'type', 'status', 'comments']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.query.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.query.create');

        return view('admin.query.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreQuery $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreQuery $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Query
        $query = Query::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/queries'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/queries');
    }

    /**
     * Display the specified resource.
     *
     * @param Query $query
     * @throws AuthorizationException
     * @return void
     */
    public function show(Query $query)
    {
        $this->authorize('admin.query.show', $query);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Query $query
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Query $query)
    {
        $this->authorize('admin.query.edit', $query);


        return view('admin.query.edit', [
            'query' => $query,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateQuery $request
     * @param Query $query
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateQuery $request, Query $query)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Query
        $query->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/queries'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/queries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyQuery $request
     * @param Query $query
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyQuery $request, Query $query)
    {
        $query->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyQuery $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyQuery $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Query::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
