@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.default-grocery-dataset.actions.index'))

@section('body')

    <default-grocery-dataset-listing
        :data="{{ $data->toJson() }}"
        :url="'{{ url('admin/default-grocery-datasets') }}'"
        inline-template>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> {{ trans('admin.default-grocery-dataset.actions.index') }}
                        <a class="btn btn-primary btn-spinner btn-sm pull-right m-b-0" href="{{ url('admin/default-grocery-datasets/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.default-grocery-dataset.actions.create') }}</a>
                    </div>
                    <div class="card-body" v-cloak>
                        <div class="card-block">
                            <form @submit.prevent="">
                                <div class="row justify-content-md-between">
                                    <div class="col col-lg-7 col-xl-5 form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="{{ trans('brackets/admin-ui::admin.placeholder.search') }}" v-model="search" @keyup.enter="filter('search', $event.target.value)" />
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-primary" @click="filter('search', search)"><i class="fa fa-search"></i>&nbsp; {{ trans('brackets/admin-ui::admin.btn.search') }}</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto form-group ">
                                        <select class="form-control" v-model="pagination.state.per_page">
                                            
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                </div>
                            </form>

                            <table class="table table-hover table-listing">
                                <thead>
                                    <tr>
                                        <th class="bulk-checkbox">
                                            <input class="form-check-input" id="enabled" type="checkbox" v-model="isClickedAll" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element" @click="onBulkItemsClickedAllWithPagination()">
                                            <label class="form-check-label" for="enabled">
                                                #
                                            </label>
                                        </th>

                                        <th is='sortable' :column="'product_id'">{{ trans('admin.default-grocery-dataset.columns.product_id') }}</th>
                                        <th is='sortable' :column="'categroy'">{{ trans('admin.default-grocery-dataset.columns.categroy') }}</th>
                                        <th is='sortable' :column="'product_name'">{{ trans('admin.default-grocery-dataset.columns.product_name') }}</th>
                                        <th is='sortable' :column="'weight_packing'">{{ trans('admin.default-grocery-dataset.columns.weight_packing') }}</th>
                                        <th is='sortable' :column="'description'">{{ trans('admin.default-grocery-dataset.columns.description') }}</th>
                                        <th is='sortable' :column="'price'">{{ trans('admin.default-grocery-dataset.columns.price') }}</th>
                                        <th is='sortable' :column="'currency'">{{ trans('admin.default-grocery-dataset.columns.currency') }}</th>
                                        <th is='sortable' :column="'images'">{{ trans('admin.default-grocery-dataset.columns.images') }}</th>
                                        <th is='sortable' :column="'meta'">{{ trans('admin.default-grocery-dataset.columns.meta') }}</th>
                                        <th is='sortable' :column="'status'">{{ trans('admin.default-grocery-dataset.columns.status') }}</th>

                                        <th></th>
                                    </tr>
                                    <tr v-show="(clickedBulkItemsCount > 0) || isClickedAll">
                                        <td class="bg-bulk-info d-table-cell text-center" colspan="12">
                                            <span class="align-middle font-weight-light text-dark">{{ trans('brackets/admin-ui::admin.listing.selected_items') }} @{{ clickedBulkItemsCount }}.  <a href="#" class="text-primary" @click="onBulkItemsClickedAll('/admin/default-grocery-datasets')" v-if="(clickedBulkItemsCount < pagination.state.total)"> <i class="fa" :class="bulkCheckingAllLoader ? 'fa-spinner' : ''"></i> {{ trans('brackets/admin-ui::admin.listing.check_all_items') }} @{{ pagination.state.total }}</a> <span class="text-primary">|</span> <a
                                                        href="#" class="text-primary" @click="onBulkItemsClickedAllUncheck()">{{ trans('brackets/admin-ui::admin.listing.uncheck_all_items') }}</a>  </span>

                                            <span class="pull-right pr-2">
                                                <button class="btn btn-sm btn-danger pr-3 pl-3" @click="bulkDelete('/admin/default-grocery-datasets/bulk-destroy')">{{ trans('brackets/admin-ui::admin.btn.delete') }}</button>
                                            </span>

                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in collection" :key="item.id" :class="bulkItems[item.id] ? 'bg-bulk' : ''">
                                        <td class="bulk-checkbox">
                                            <input class="form-check-input" :id="'enabled' + item.id" type="checkbox" v-model="bulkItems[item.id]" v-validate="''" :data-vv-name="'enabled' + item.id"  :name="'enabled' + item.id + '_fake_element'" @click="onBulkItemClicked(item.id)" :disabled="bulkCheckingAllLoader">
                                            <label class="form-check-label" :for="'enabled' + item.id">
                                            </label>
                                        </td>

                                    <td>@{{ item.product_id }}</td>
                                        <td>@{{ item.categroy }}</td>
                                        <td>@{{ item.product_name }}</td>
                                        <td>@{{ item.weight_packing }}</td>
                                        <td>@{{ item.description }}</td>
                                        <td>@{{ item.price }}</td>
                                        <td>@{{ item.currency }}</td>
                                        <td>@{{ item.images }}</td>
                                        <td>@{{ item.meta }}</td>
                                        <td>@{{ item.status }}</td>
                                        
                                        <td>
                                            <div class="row no-gutters">
                                                <div class="col-auto">
                                                    <a class="btn btn-sm btn-spinner btn-info" :href="item.resource_url + '/edit'" title="{{ trans('brackets/admin-ui::admin.btn.edit') }}" role="button"><i class="fa fa-edit"></i></a>
                                                </div>
                                                <form class="col" @submit.prevent="deleteItem(item.resource_url)">
                                                    <button type="submit" class="btn btn-sm btn-danger" title="{{ trans('brackets/admin-ui::admin.btn.delete') }}"><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="row" v-if="pagination.state.total > 0">
                                <div class="col-sm">
                                    <span class="pagination-caption">{{ trans('brackets/admin-ui::admin.pagination.overview') }}</span>
                                </div>
                                <div class="col-sm-auto">
                                    <pagination></pagination>
                                </div>
                            </div>

                            <div class="no-items-found" v-if="!collection.length > 0">
                                <i class="icon-magnifier"></i>
                                <h3>{{ trans('brackets/admin-ui::admin.index.no_items') }}</h3>
                                <p>{{ trans('brackets/admin-ui::admin.index.try_changing_items') }}</p>
                                <a class="btn btn-primary btn-spinner" href="{{ url('admin/default-grocery-datasets/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.default-grocery-dataset.actions.create') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </default-grocery-dataset-listing>

@endsection