@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.business-profile.actions.edit', ['name' => $businessProfile->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <business-profile-form
                :action="'{{ $businessProfile->resource_url }}'"
                :data="{{ $businessProfile->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.business-profile.actions.edit', ['name' => $businessProfile->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.business-profile.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </business-profile-form>

        </div>
    
</div>

@endsection