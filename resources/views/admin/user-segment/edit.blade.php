@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.user-segment.actions.edit', ['name' => $userSegment->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <user-segment-form
                :action="'{{ $userSegment->resource_url }}'"
                :data="{{ $userSegment->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.user-segment.actions.edit', ['name' => $userSegment->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.user-segment.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </user-segment-form>

        </div>
    
</div>

@endsection