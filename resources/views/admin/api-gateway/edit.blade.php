@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.api-gateway.actions.edit', ['name' => $apiGateway->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <api-gateway-form
                :action="'{{ $apiGateway->resource_url }}'"
                :data="{{ $apiGateway->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.api-gateway.actions.edit', ['name' => $apiGateway->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.api-gateway.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </api-gateway-form>

        </div>
    
</div>

@endsection