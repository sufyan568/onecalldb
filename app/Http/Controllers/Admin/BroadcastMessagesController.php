<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BroadcastMessage\BulkDestroyBroadcastMessage;
use App\Http\Requests\Admin\BroadcastMessage\DestroyBroadcastMessage;
use App\Http\Requests\Admin\BroadcastMessage\IndexBroadcastMessage;
use App\Http\Requests\Admin\BroadcastMessage\StoreBroadcastMessage;
use App\Http\Requests\Admin\BroadcastMessage\UpdateBroadcastMessage;
use App\Models\BroadcastMessage;
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

class BroadcastMessagesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexBroadcastMessage $request
     * @return array|Factory|View
     */
    public function index(IndexBroadcastMessage $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(BroadcastMessage::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'datetime', 'mobile_number', 'message', 'channel', 'type', 'status'],

            // set columns to searchIn
            ['id', 'datetime', 'mobile_number', 'message', 'channel', 'type', 'status']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.broadcast-message.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.broadcast-message.create');

        return view('admin.broadcast-message.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBroadcastMessage $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreBroadcastMessage $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the BroadcastMessage
        $broadcastMessage = BroadcastMessage::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/broadcast-messages'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/broadcast-messages');
    }

    /**
     * Display the specified resource.
     *
     * @param BroadcastMessage $broadcastMessage
     * @throws AuthorizationException
     * @return void
     */
    public function show(BroadcastMessage $broadcastMessage)
    {
        $this->authorize('admin.broadcast-message.show', $broadcastMessage);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param BroadcastMessage $broadcastMessage
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(BroadcastMessage $broadcastMessage)
    {
        $this->authorize('admin.broadcast-message.edit', $broadcastMessage);


        return view('admin.broadcast-message.edit', [
            'broadcastMessage' => $broadcastMessage,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBroadcastMessage $request
     * @param BroadcastMessage $broadcastMessage
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateBroadcastMessage $request, BroadcastMessage $broadcastMessage)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values BroadcastMessage
        $broadcastMessage->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/broadcast-messages'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/broadcast-messages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyBroadcastMessage $request
     * @param BroadcastMessage $broadcastMessage
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyBroadcastMessage $request, BroadcastMessage $broadcastMessage)
    {
        $broadcastMessage->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyBroadcastMessage $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyBroadcastMessage $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    BroadcastMessage::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
