<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DefaultGrocery\BulkDestroyDefaultGrocery;
use App\Http\Requests\Admin\DefaultGrocery\DestroyDefaultGrocery;
use App\Http\Requests\Admin\DefaultGrocery\IndexDefaultGrocery;
use App\Http\Requests\Admin\DefaultGrocery\StoreDefaultGrocery;
use App\Http\Requests\Admin\DefaultGrocery\UpdateDefaultGrocery;
use App\Models\DefaultGrocery;
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

class DefaultGroceryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexDefaultGrocery $request
     * @return array|Factory|View
     */
    public function index(IndexDefaultGrocery $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(DefaultGrocery::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'categroy', 'product_name', 'weight_packing', 'description', 'price', 'currency', 'images', 'meta', 'status'],

            // set columns to searchIn
            ['id', 'categroy', 'product_name', 'weight_packing', 'description', 'price', 'currency', 'images', 'meta', 'status']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.default-grocery.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.default-grocery.create');

        return view('admin.default-grocery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreDefaultGrocery $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreDefaultGrocery $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the DefaultGrocery
        $defaultGrocery = DefaultGrocery::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/default-groceries'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/default-groceries');
    }

    /**
     * Display the specified resource.
     *
     * @param DefaultGrocery $defaultGrocery
     * @throws AuthorizationException
     * @return void
     */
    public function show(DefaultGrocery $defaultGrocery)
    {
        $this->authorize('admin.default-grocery.show', $defaultGrocery);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param DefaultGrocery $defaultGrocery
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(DefaultGrocery $defaultGrocery)
    {
        $this->authorize('admin.default-grocery.edit', $defaultGrocery);


        return view('admin.default-grocery.edit', [
            'defaultGrocery' => $defaultGrocery,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDefaultGrocery $request
     * @param DefaultGrocery $defaultGrocery
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateDefaultGrocery $request, DefaultGrocery $defaultGrocery)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values DefaultGrocery
        $defaultGrocery->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/default-groceries'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/default-groceries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyDefaultGrocery $request
     * @param DefaultGrocery $defaultGrocery
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyDefaultGrocery $request, DefaultGrocery $defaultGrocery)
    {
        $defaultGrocery->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyDefaultGrocery $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyDefaultGrocery $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    DefaultGrocery::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
