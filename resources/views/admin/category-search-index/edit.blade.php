@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.category-search-index.actions.edit', ['name' => $categorySearchIndex->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <category-search-index-form
                :action="'{{ $categorySearchIndex->resource_url }}'"
                :data="{{ $categorySearchIndex->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.category-search-index.actions.edit', ['name' => $categorySearchIndex->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.category-search-index.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </category-search-index-form>

        </div>
    
</div>

@endsection