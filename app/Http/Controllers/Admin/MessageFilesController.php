<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MessageFile\BulkDestroyMessageFile;
use App\Http\Requests\Admin\MessageFile\DestroyMessageFile;
use App\Http\Requests\Admin\MessageFile\IndexMessageFile;
use App\Http\Requests\Admin\MessageFile\StoreMessageFile;
use App\Http\Requests\Admin\MessageFile\UpdateMessageFile;
use App\Models\MessageFile;
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

class MessageFilesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexMessageFile $request
     * @return array|Factory|View
     */
    public function index(IndexMessageFile $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(MessageFile::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'message_id', 'file', 'meta', 'type', 'status'],

            // set columns to searchIn
            ['id', 'message_id', 'file', 'meta', 'type', 'status']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.message-file.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.message-file.create');

        return view('admin.message-file.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreMessageFile $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreMessageFile $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the MessageFile
        $messageFile = MessageFile::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/message-files'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/message-files');
    }

    /**
     * Display the specified resource.
     *
     * @param MessageFile $messageFile
     * @throws AuthorizationException
     * @return void
     */
    public function show(MessageFile $messageFile)
    {
        $this->authorize('admin.message-file.show', $messageFile);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param MessageFile $messageFile
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(MessageFile $messageFile)
    {
        $this->authorize('admin.message-file.edit', $messageFile);


        return view('admin.message-file.edit', [
            'messageFile' => $messageFile,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMessageFile $request
     * @param MessageFile $messageFile
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateMessageFile $request, MessageFile $messageFile)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values MessageFile
        $messageFile->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/message-files'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/message-files');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyMessageFile $request
     * @param MessageFile $messageFile
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyMessageFile $request, MessageFile $messageFile)
    {
        $messageFile->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyMessageFile $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyMessageFile $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    MessageFile::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
