<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserMessge\BulkDestroyUserMessge;
use App\Http\Requests\Admin\UserMessge\DestroyUserMessge;
use App\Http\Requests\Admin\UserMessge\IndexUserMessge;
use App\Http\Requests\Admin\UserMessge\StoreUserMessge;
use App\Http\Requests\Admin\UserMessge\UpdateUserMessge;
use App\Models\UserMessge;
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

class UserMessgesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexUserMessge $request
     * @return array|Factory|View
     */
    public function index(IndexUserMessge $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(UserMessge::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'datetime', 'to', 'from', 'message', 'type', 'status'],

            // set columns to searchIn
            ['id', 'datetime', 'to', 'from', 'message', 'type', 'status']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.user-messge.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.user-messge.create');

        return view('admin.user-messge.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreUserMessge $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreUserMessge $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the UserMessge
        $userMessge = UserMessge::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/user-messges'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/user-messges');
    }

    /**
     * Display the specified resource.
     *
     * @param UserMessge $userMessge
     * @throws AuthorizationException
     * @return void
     */
    public function show(UserMessge $userMessge)
    {
        $this->authorize('admin.user-messge.show', $userMessge);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param UserMessge $userMessge
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(UserMessge $userMessge)
    {
        $this->authorize('admin.user-messge.edit', $userMessge);


        return view('admin.user-messge.edit', [
            'userMessge' => $userMessge,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateUserMessge $request
     * @param UserMessge $userMessge
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateUserMessge $request, UserMessge $userMessge)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values UserMessge
        $userMessge->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/user-messges'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/user-messges');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyUserMessge $request
     * @param UserMessge $userMessge
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyUserMessge $request, UserMessge $userMessge)
    {
        $userMessge->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyUserMessge $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyUserMessge $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    UserMessge::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
