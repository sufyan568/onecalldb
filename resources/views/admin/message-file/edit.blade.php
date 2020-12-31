@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.message-file.actions.edit', ['name' => $messageFile->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <message-file-form
                :action="'{{ $messageFile->resource_url }}'"
                :data="{{ $messageFile->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.message-file.actions.edit', ['name' => $messageFile->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.message-file.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </message-file-form>

        </div>
    
</div>

@endsection