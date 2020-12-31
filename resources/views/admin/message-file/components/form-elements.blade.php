<div class="form-group row align-items-center" :class="{'has-danger': errors.has('message_id'), 'has-success': fields.message_id && fields.message_id.valid }">
    <label for="message_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.message-file.columns.message_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.message_id" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('message_id'), 'form-control-success': fields.message_id && fields.message_id.valid}" id="message_id" name="message_id" placeholder="{{ trans('admin.message-file.columns.message_id') }}">
        <div v-if="errors.has('message_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('message_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('file'), 'has-success': fields.file && fields.file.valid }">
    <label for="file" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.message-file.columns.file') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.file" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('file'), 'form-control-success': fields.file && fields.file.valid}" id="file" name="file" placeholder="{{ trans('admin.message-file.columns.file') }}">
        <div v-if="errors.has('file')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('file') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('meta'), 'has-success': fields.meta && fields.meta.valid }">
    <label for="meta" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.message-file.columns.meta') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.meta" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('meta'), 'form-control-success': fields.meta && fields.meta.valid}" id="meta" name="meta" placeholder="{{ trans('admin.message-file.columns.meta') }}">
        <div v-if="errors.has('meta')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('meta') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('type'), 'has-success': fields.type && fields.type.valid }">
    <label for="type" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.message-file.columns.type') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.type" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('type'), 'form-control-success': fields.type && fields.type.valid}" id="type" name="type" placeholder="{{ trans('admin.message-file.columns.type') }}">
        <div v-if="errors.has('type')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('type') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('status'), 'has-success': fields.status && fields.status.valid }">
    <label for="status" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.message-file.columns.status') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.status" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('status'), 'form-control-success': fields.status && fields.status.valid}" id="status" name="status" placeholder="{{ trans('admin.message-file.columns.status') }}">
        <div v-if="errors.has('status')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('status') }}</div>
    </div>
</div>


