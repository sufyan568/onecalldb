<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ApiGateway\BulkDestroyApiGateway;
use App\Http\Requests\Admin\ApiGateway\DestroyApiGateway;
use App\Http\Requests\Admin\ApiGateway\IndexApiGateway;
use App\Http\Requests\Admin\ApiGateway\StoreApiGateway;
use App\Http\Requests\Admin\ApiGateway\UpdateApiGateway;
use App\Models\ApiGateway;
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

class ApiGatewayController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexApiGateway $request
     * @return array|Factory|View
     */
    public function index(IndexApiGateway $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(ApiGateway::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'description', 'key', 'path', 'status'],

            // set columns to searchIn
            ['id', 'name', 'description', 'key', 'path', 'status']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.api-gateway.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.api-gateway.create');

        return view('admin.api-gateway.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreApiGateway $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreApiGateway $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the ApiGateway
        $apiGateway = ApiGateway::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/api-gateways'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/api-gateways');
    }

    /**
     * Display the specified resource.
     *
     * @param ApiGateway $apiGateway
     * @throws AuthorizationException
     * @return void
     */
    public function show(ApiGateway $apiGateway)
    {
        $this->authorize('admin.api-gateway.show', $apiGateway);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ApiGateway $apiGateway
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(ApiGateway $apiGateway)
    {
        $this->authorize('admin.api-gateway.edit', $apiGateway);


        return view('admin.api-gateway.edit', [
            'apiGateway' => $apiGateway,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateApiGateway $request
     * @param ApiGateway $apiGateway
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateApiGateway $request, ApiGateway $apiGateway)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values ApiGateway
        $apiGateway->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/api-gateways'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/api-gateways');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyApiGateway $request
     * @param ApiGateway $apiGateway
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyApiGateway $request, ApiGateway $apiGateway)
    {
        $apiGateway->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyApiGateway $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyApiGateway $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    ApiGateway::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
