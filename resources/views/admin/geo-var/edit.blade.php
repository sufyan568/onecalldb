@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.geo-var.actions.edit', ['name' => $geoVar->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <geo-var-form
                :action="'{{ $geoVar->resource_url }}'"
                :data="{{ $geoVar->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.geo-var.actions.edit', ['name' => $geoVar->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.geo-var.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </geo-var-form>

        </div>
    
</div>

@endsection