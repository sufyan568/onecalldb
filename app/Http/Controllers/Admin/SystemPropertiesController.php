<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SystemProperty\BulkDestroySystemProperty;
use App\Http\Requests\Admin\SystemProperty\DestroySystemProperty;
use App\Http\Requests\Admin\SystemProperty\IndexSystemProperty;
use App\Http\Requests\Admin\SystemProperty\StoreSystemProperty;
use App\Http\Requests\Admin\SystemProperty\UpdateSystemProperty;
use App\Models\SystemProperty;
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

class SystemPropertiesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexSystemProperty $request
     * @return array|Factory|View
     */
    public function index(IndexSystemProperty $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(SystemProperty::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'tag', 'value'],

            // set columns to searchIn
            ['id', 'tag', 'value', 'description']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.system-property.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.system-property.create');

        return view('admin.system-property.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSystemProperty $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreSystemProperty $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the SystemProperty
        $systemProperty = SystemProperty::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/system-properties'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/system-properties');
    }

    /**
     * Display the specified resource.
     *
     * @param SystemProperty $systemProperty
     * @throws AuthorizationException
     * @return void
     */
    public function show(SystemProperty $systemProperty)
    {
        $this->authorize('admin.system-property.show', $systemProperty);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param SystemProperty $systemProperty
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(SystemProperty $systemProperty)
    {
        $this->authorize('admin.system-property.edit', $systemProperty);


        return view('admin.system-property.edit', [
            'systemProperty' => $systemProperty,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSystemProperty $request
     * @param SystemProperty $systemProperty
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateSystemProperty $request, SystemProperty $systemProperty)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values SystemProperty
        $systemProperty->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/system-properties'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/system-properties');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroySystemProperty $request
     * @param SystemProperty $systemProperty
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroySystemProperty $request, SystemProperty $systemProperty)
    {
        $systemProperty->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroySystemProperty $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroySystemProperty $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    SystemProperty::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
