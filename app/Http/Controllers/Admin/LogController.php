<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Log\BulkDestroyLog;
use App\Http\Requests\Admin\Log\DestroyLog;
use App\Http\Requests\Admin\Log\IndexLog;
use App\Http\Requests\Admin\Log\StoreLog;
use App\Http\Requests\Admin\Log\UpdateLog;
use App\Models\Log;
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

class LogController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexLog $request
     * @return array|Factory|View
     */
    public function index(IndexLog $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Log::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'datetime', 'tag', 'value'],

            // set columns to searchIn
            ['id', 'datetime', 'tag', 'value']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.log.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.log.create');

        return view('admin.log.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreLog $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreLog $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Log
        $log = Log::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/logs'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/logs');
    }

    /**
     * Display the specified resource.
     *
     * @param Log $log
     * @throws AuthorizationException
     * @return void
     */
    public function show(Log $log)
    {
        $this->authorize('admin.log.show', $log);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Log $log
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Log $log)
    {
        $this->authorize('admin.log.edit', $log);


        return view('admin.log.edit', [
            'log' => $log,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateLog $request
     * @param Log $log
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateLog $request, Log $log)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Log
        $log->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/logs'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/logs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyLog $request
     * @param Log $log
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyLog $request, Log $log)
    {
        $log->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyLog $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyLog $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Log::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
