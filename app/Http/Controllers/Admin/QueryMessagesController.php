<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\QueryMessage\BulkDestroyQueryMessage;
use App\Http\Requests\Admin\QueryMessage\DestroyQueryMessage;
use App\Http\Requests\Admin\QueryMessage\IndexQueryMessage;
use App\Http\Requests\Admin\QueryMessage\StoreQueryMessage;
use App\Http\Requests\Admin\QueryMessage\UpdateQueryMessage;
use App\Models\QueryMessage;
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

class QueryMessagesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexQueryMessage $request
     * @return array|Factory|View
     */
    public function index(IndexQueryMessage $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(QueryMessage::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'query_id', 'type', 'content', 'meta'],

            // set columns to searchIn
            ['id', 'query_id', 'type', 'content', 'meta']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.query-message.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.query-message.create');

        return view('admin.query-message.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreQueryMessage $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreQueryMessage $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the QueryMessage
        $queryMessage = QueryMessage::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/query-messages'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/query-messages');
    }

    /**
     * Display the specified resource.
     *
     * @param QueryMessage $queryMessage
     * @throws AuthorizationException
     * @return void
     */
    public function show(QueryMessage $queryMessage)
    {
        $this->authorize('admin.query-message.show', $queryMessage);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param QueryMessage $queryMessage
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(QueryMessage $queryMessage)
    {
        $this->authorize('admin.query-message.edit', $queryMessage);


        return view('admin.query-message.edit', [
            'queryMessage' => $queryMessage,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateQueryMessage $request
     * @param QueryMessage $queryMessage
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateQueryMessage $request, QueryMessage $queryMessage)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values QueryMessage
        $queryMessage->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/query-messages'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/query-messages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyQueryMessage $request
     * @param QueryMessage $queryMessage
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyQueryMessage $request, QueryMessage $queryMessage)
    {
        $queryMessage->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyQueryMessage $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyQueryMessage $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    QueryMessage::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
