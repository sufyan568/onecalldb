@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.default-grocery.actions.edit', ['name' => $defaultGrocery->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <default-grocery-form
                :action="'{{ $defaultGrocery->resource_url }}'"
                :data="{{ $defaultGrocery->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.default-grocery.actions.edit', ['name' => $defaultGrocery->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.default-grocery.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </default-grocery-form>

        </div>
    
</div>

@endsection