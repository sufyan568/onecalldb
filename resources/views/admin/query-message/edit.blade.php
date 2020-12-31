@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.query-message.actions.edit', ['name' => $queryMessage->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <query-message-form
                :action="'{{ $queryMessage->resource_url }}'"
                :data="{{ $queryMessage->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.query-message.actions.edit', ['name' => $queryMessage->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.query-message.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </query-message-form>

        </div>
    
</div>

@endsection