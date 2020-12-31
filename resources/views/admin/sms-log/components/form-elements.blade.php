<div class="form-group row align-items-center" :class="{'has-danger': errors.has('datetime'), 'has-success': fields.datetime && fields.datetime.valid }">
    <label for="datetime" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.sms-log.columns.datetime') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.datetime" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('datetime'), 'form-control-success': fields.datetime && fields.datetime.valid}" id="datetime" name="datetime" placeholder="{{ trans('admin.sms-log.columns.datetime') }}">
        <div v-if="errors.has('datetime')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('datetime') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tag'), 'has-success': fields.tag && fields.tag.valid }">
    <label for="tag" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.sms-log.columns.tag') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tag" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tag'), 'form-control-success': fields.tag && fields.tag.valid}" id="tag" name="tag" placeholder="{{ trans('admin.sms-log.columns.tag') }}">
        <div v-if="errors.has('tag')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tag') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('to'), 'has-success': fields.to && fields.to.valid }">
    <label for="to" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.sms-log.columns.to') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.to" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('to'), 'form-control-success': fields.to && fields.to.valid}" id="to" name="to" placeholder="{{ trans('admin.sms-log.columns.to') }}">
        <div v-if="errors.has('to')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('to') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('message'), 'has-success': fields.message && fields.message.valid }">
    <label for="message" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.sms-log.columns.message') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.message" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('message'), 'form-control-success': fields.message && fields.message.valid}" id="message" name="message" placeholder="{{ trans('admin.sms-log.columns.message') }}">
        <div v-if="errors.has('message')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('message') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('api_request'), 'has-success': fields.api_request && fields.api_request.valid }">
    <label for="api_request" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.sms-log.columns.api_request') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.api_request" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('api_request'), 'form-control-success': fields.api_request && fields.api_request.valid}" id="api_request" name="api_request" placeholder="{{ trans('admin.sms-log.columns.api_request') }}">
        <div v-if="errors.has('api_request')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('api_request') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('api_response'), 'has-success': fields.api_response && fields.api_response.valid }">
    <label for="api_response" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.sms-log.columns.api_response') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.api_response" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('api_response'), 'form-control-success': fields.api_response && fields.api_response.valid}" id="api_response" name="api_response" placeholder="{{ trans('admin.sms-log.columns.api_response') }}">
        <div v-if="errors.has('api_response')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('api_response') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('status'), 'has-success': fields.status && fields.status.valid }">
    <label for="status" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.sms-log.columns.status') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.status" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('status'), 'form-control-success': fields.status && fields.status.valid}" id="status" name="status" placeholder="{{ trans('admin.sms-log.columns.status') }}">
        <div v-if="errors.has('status')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('status') }}</div>
    </div>
</div>


