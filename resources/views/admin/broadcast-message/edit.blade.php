@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.broadcast-message.actions.edit', ['name' => $broadcastMessage->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <broadcast-message-form
                :action="'{{ $broadcastMessage->resource_url }}'"
                :data="{{ $broadcastMessage->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.broadcast-message.actions.edit', ['name' => $broadcastMessage->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.broadcast-message.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </broadcast-message-form>

        </div>
    
</div>

@endsection