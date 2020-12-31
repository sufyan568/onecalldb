<div class="form-group row align-items-center" :class="{'has-danger': errors.has('query_id'), 'has-success': fields.query_id && fields.query_id.valid }">
    <label for="query_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.query-message.columns.query_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.query_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('query_id'), 'form-control-success': fields.query_id && fields.query_id.valid}" id="query_id" name="query_id" placeholder="{{ trans('admin.query-message.columns.query_id') }}">
        <div v-if="errors.has('query_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('query_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('type'), 'has-success': fields.type && fields.type.valid }">
    <label for="type" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.query-message.columns.type') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.type" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('type'), 'form-control-success': fields.type && fields.type.valid}" id="type" name="type" placeholder="{{ trans('admin.query-message.columns.type') }}">
        <div v-if="errors.has('type')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('type') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('content'), 'has-success': fields.content && fields.content.valid }">
    <label for="content" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.query-message.columns.content') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.content" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('content'), 'form-control-success': fields.content && fields.content.valid}" id="content" name="content" placeholder="{{ trans('admin.query-message.columns.content') }}">
        <div v-if="errors.has('content')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('content') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('meta'), 'has-success': fields.meta && fields.meta.valid }">
    <label for="meta" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.query-message.columns.meta') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.meta" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('meta'), 'form-control-success': fields.meta && fields.meta.valid}" id="meta" name="meta" placeholder="{{ trans('admin.query-message.columns.meta') }}">
        <div v-if="errors.has('meta')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('meta') }}</div>
    </div>
</div>


