<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SmsLog\BulkDestroySmsLog;
use App\Http\Requests\Admin\SmsLog\DestroySmsLog;
use App\Http\Requests\Admin\SmsLog\IndexSmsLog;
use App\Http\Requests\Admin\SmsLog\StoreSmsLog;
use App\Http\Requests\Admin\SmsLog\UpdateSmsLog;
use App\Models\SmsLog;
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

class SmsLogController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexSmsLog $request
     * @return array|Factory|View
     */
    public function index(IndexSmsLog $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(SmsLog::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'datetime', 'tag', 'to', 'message', 'api_request', 'api_response', 'status'],

            // set columns to searchIn
            ['id', 'datetime', 'tag', 'to', 'message', 'api_request', 'api_response', 'status']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.sms-log.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.sms-log.create');

        return view('admin.sms-log.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSmsLog $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreSmsLog $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the SmsLog
        $smsLog = SmsLog::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/sms-logs'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/sms-logs');
    }

    /**
     * Display the specified resource.
     *
     * @param SmsLog $smsLog
     * @throws AuthorizationException
     * @return void
     */
    public function show(SmsLog $smsLog)
    {
        $this->authorize('admin.sms-log.show', $smsLog);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param SmsLog $smsLog
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(SmsLog $smsLog)
    {
        $this->authorize('admin.sms-log.edit', $smsLog);


        return view('admin.sms-log.edit', [
            'smsLog' => $smsLog,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSmsLog $request
     * @param SmsLog $smsLog
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateSmsLog $request, SmsLog $smsLog)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values SmsLog
        $smsLog->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/sms-logs'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/sms-logs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroySmsLog $request
     * @param SmsLog $smsLog
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroySmsLog $request, SmsLog $smsLog)
    {
        $smsLog->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroySmsLog $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroySmsLog $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    SmsLog::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
