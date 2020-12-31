@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.sms-log.actions.edit', ['name' => $smsLog->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <sms-log-form
                :action="'{{ $smsLog->resource_url }}'"
                :data="{{ $smsLog->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.sms-log.actions.edit', ['name' => $smsLog->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.sms-log.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </sms-log-form>

        </div>
    
</div>

@endsection