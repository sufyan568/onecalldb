<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DefaultGroceryDataset\BulkDestroyDefaultGroceryDataset;
use App\Http\Requests\Admin\DefaultGroceryDataset\DestroyDefaultGroceryDataset;
use App\Http\Requests\Admin\DefaultGroceryDataset\IndexDefaultGroceryDataset;
use App\Http\Requests\Admin\DefaultGroceryDataset\StoreDefaultGroceryDataset;
use App\Http\Requests\Admin\DefaultGroceryDataset\UpdateDefaultGroceryDataset;
use App\Models\DefaultGroceryDataset;
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

class DefaultGroceryDatasetController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexDefaultGroceryDataset $request
     * @return array|Factory|View
     */
    public function index(IndexDefaultGroceryDataset $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(DefaultGroceryDataset::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['product_id', 'categroy', 'product_name', 'weight_packing', 'description', 'price', 'currency', 'images', 'meta', 'status'],

            // set columns to searchIn
            ['product_id', 'categroy', 'product_name', 'weight_packing', 'description', 'price', 'currency', 'images', 'meta', 'status']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.default-grocery-dataset.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.default-grocery-dataset.create');

        return view('admin.default-grocery-dataset.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreDefaultGroceryDataset $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreDefaultGroceryDataset $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the DefaultGroceryDataset
        $defaultGroceryDataset = DefaultGroceryDataset::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/default-grocery-datasets'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/default-grocery-datasets');
    }

    /**
     * Display the specified resource.
     *
     * @param DefaultGroceryDataset $defaultGroceryDataset
     * @throws AuthorizationException
     * @return void
     */
    public function show(DefaultGroceryDataset $defaultGroceryDataset)
    {
        $this->authorize('admin.default-grocery-dataset.show', $defaultGroceryDataset);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param DefaultGroceryDataset $defaultGroceryDataset
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(DefaultGroceryDataset $defaultGroceryDataset)
    {
        $this->authorize('admin.default-grocery-dataset.edit', $defaultGroceryDataset);


        return view('admin.default-grocery-dataset.edit', [
            'defaultGroceryDataset' => $defaultGroceryDataset,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDefaultGroceryDataset $request
     * @param DefaultGroceryDataset $defaultGroceryDataset
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateDefaultGroceryDataset $request, DefaultGroceryDataset $defaultGroceryDataset)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values DefaultGroceryDataset
        $defaultGroceryDataset->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/default-grocery-datasets'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/default-grocery-datasets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyDefaultGroceryDataset $request
     * @param DefaultGroceryDataset $defaultGroceryDataset
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyDefaultGroceryDataset $request, DefaultGroceryDataset $defaultGroceryDataset)
    {
        $defaultGroceryDataset->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyDefaultGroceryDataset $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyDefaultGroceryDataset $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    DefaultGroceryDataset::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
