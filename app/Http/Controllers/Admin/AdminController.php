<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Admin\BulkDestroyAdmin;
use App\Http\Requests\Admin\Admin\DestroyAdmin;
use App\Http\Requests\Admin\Admin\IndexAdmin;
use App\Http\Requests\Admin\Admin\StoreAdmin;
use App\Http\Requests\Admin\Admin\UpdateAdmin;
use App\Models\Admin;
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

class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexAdmin $request
     * @return array|Factory|View
     */
    public function index(IndexAdmin $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Admin::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'datetime', 'user_id', 'email', 'discription', 'comments', 'type', 'status'],

            // set columns to searchIn
            ['id', 'datetime', 'user_id', 'email', 'discription', 'comments', 'type', 'status']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.admin.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.admin.create');

        return view('admin.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAdmin $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreAdmin $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Admin
        $admin = Admin::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/admins'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/admins');
    }

    /**
     * Display the specified resource.
     *
     * @param Admin $admin
     * @throws AuthorizationException
     * @return void
     */
    public function show(Admin $admin)
    {
        $this->authorize('admin.admin.show', $admin);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Admin $admin
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Admin $admin)
    {
        $this->authorize('admin.admin.edit', $admin);


        return view('admin.admin.edit', [
            'admin' => $admin,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateAdmin $request
     * @param Admin $admin
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateAdmin $request, Admin $admin)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Admin
        $admin->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/admins'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/admins');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyAdmin $request
     * @param Admin $admin
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyAdmin $request, Admin $admin)
    {
        $admin->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyAdmin $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyAdmin $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Admin::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
