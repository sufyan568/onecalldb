<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategorySearchIndex\BulkDestroyCategorySearchIndex;
use App\Http\Requests\Admin\CategorySearchIndex\DestroyCategorySearchIndex;
use App\Http\Requests\Admin\CategorySearchIndex\IndexCategorySearchIndex;
use App\Http\Requests\Admin\CategorySearchIndex\StoreCategorySearchIndex;
use App\Http\Requests\Admin\CategorySearchIndex\UpdateCategorySearchIndex;
use App\Models\CategorySearchIndex;
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

class CategorySearchIndexController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexCategorySearchIndex $request
     * @return array|Factory|View
     */
    public function index(IndexCategorySearchIndex $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(CategorySearchIndex::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'last_updated', 'category', 'keywords', 'meta'],

            // set columns to searchIn
            ['id', 'last_updated', 'category', 'keywords', 'meta']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.category-search-index.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.category-search-index.create');

        return view('admin.category-search-index.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCategorySearchIndex $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreCategorySearchIndex $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the CategorySearchIndex
        $categorySearchIndex = CategorySearchIndex::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/category-search-indices'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/category-search-indices');
    }

    /**
     * Display the specified resource.
     *
     * @param CategorySearchIndex $categorySearchIndex
     * @throws AuthorizationException
     * @return void
     */
    public function show(CategorySearchIndex $categorySearchIndex)
    {
        $this->authorize('admin.category-search-index.show', $categorySearchIndex);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CategorySearchIndex $categorySearchIndex
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(CategorySearchIndex $categorySearchIndex)
    {
        $this->authorize('admin.category-search-index.edit', $categorySearchIndex);


        return view('admin.category-search-index.edit', [
            'categorySearchIndex' => $categorySearchIndex,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCategorySearchIndex $request
     * @param CategorySearchIndex $categorySearchIndex
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateCategorySearchIndex $request, CategorySearchIndex $categorySearchIndex)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values CategorySearchIndex
        $categorySearchIndex->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/category-search-indices'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/category-search-indices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCategorySearchIndex $request
     * @param CategorySearchIndex $categorySearchIndex
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyCategorySearchIndex $request, CategorySearchIndex $categorySearchIndex)
    {
        $categorySearchIndex->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyCategorySearchIndex $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyCategorySearchIndex $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    CategorySearchIndex::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
