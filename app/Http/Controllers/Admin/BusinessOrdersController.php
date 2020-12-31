<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BusinessOrder\BulkDestroyBusinessOrder;
use App\Http\Requests\Admin\BusinessOrder\DestroyBusinessOrder;
use App\Http\Requests\Admin\BusinessOrder\IndexBusinessOrder;
use App\Http\Requests\Admin\BusinessOrder\StoreBusinessOrder;
use App\Http\Requests\Admin\BusinessOrder\UpdateBusinessOrder;
use App\Models\BusinessOrder;
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

class BusinessOrdersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexBusinessOrder $request
     * @return array|Factory|View
     */
    public function index(IndexBusinessOrder $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(BusinessOrder::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'datetime', 'buisness_id', 'buisness_account_id', 'from_username', 'category', 'query_id', 'delivery_id', 'comments', 'status'],

            // set columns to searchIn
            ['id', 'datetime', 'buisness_id', 'buisness_account_id', 'from_username', 'category', 'query_id', 'delivery_id', 'comments', 'status']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.business-order.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.business-order.create');

        return view('admin.business-order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBusinessOrder $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreBusinessOrder $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the BusinessOrder
        $businessOrder = BusinessOrder::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/business-orders'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/business-orders');
    }

    /**
     * Display the specified resource.
     *
     * @param BusinessOrder $businessOrder
     * @throws AuthorizationException
     * @return void
     */
    public function show(BusinessOrder $businessOrder)
    {
        $this->authorize('admin.business-order.show', $businessOrder);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param BusinessOrder $businessOrder
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(BusinessOrder $businessOrder)
    {
        $this->authorize('admin.business-order.edit', $businessOrder);


        return view('admin.business-order.edit', [
            'businessOrder' => $businessOrder,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBusinessOrder $request
     * @param BusinessOrder $businessOrder
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateBusinessOrder $request, BusinessOrder $businessOrder)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values BusinessOrder
        $businessOrder->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/business-orders'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/business-orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyBusinessOrder $request
     * @param BusinessOrder $businessOrder
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyBusinessOrder $request, BusinessOrder $businessOrder)
    {
        $businessOrder->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyBusinessOrder $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyBusinessOrder $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    BusinessOrder::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
