<div class="form-group row align-items-center" :class="{'has-danger': errors.has('datetime'), 'has-success': fields.datetime && fields.datetime.valid }">
    <label for="datetime" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.broadcast-message.columns.datetime') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.datetime" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('datetime'), 'form-control-success': fields.datetime && fields.datetime.valid}" id="datetime" name="datetime" placeholder="{{ trans('admin.broadcast-message.columns.datetime') }}">
        <div v-if="errors.has('datetime')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('datetime') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('mobile_number'), 'has-success': fields.mobile_number && fields.mobile_number.valid }">
    <label for="mobile_number" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.broadcast-message.columns.mobile_number') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.mobile_number" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('mobile_number'), 'form-control-success': fields.mobile_number && fields.mobile_number.valid}" id="mobile_number" name="mobile_number" placeholder="{{ trans('admin.broadcast-message.columns.mobile_number') }}">
        <div v-if="errors.has('mobile_number')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('mobile_number') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('message'), 'has-success': fields.message && fields.message.valid }">
    <label for="message" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.broadcast-message.columns.message') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.message" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('message'), 'form-control-success': fields.message && fields.message.valid}" id="message" name="message" placeholder="{{ trans('admin.broadcast-message.columns.message') }}">
        <div v-if="errors.has('message')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('message') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('channel'), 'has-success': fields.channel && fields.channel.valid }">
    <label for="channel" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.broadcast-message.columns.channel') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.channel" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('channel'), 'form-control-success': fields.channel && fields.channel.valid}" id="channel" name="channel" placeholder="{{ trans('admin.broadcast-message.columns.channel') }}">
        <div v-if="errors.has('channel')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('channel') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('type'), 'has-success': fields.type && fields.type.valid }">
    <label for="type" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.broadcast-message.columns.type') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.type" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('type'), 'form-control-success': fields.type && fields.type.valid}" id="type" name="type" placeholder="{{ trans('admin.broadcast-message.columns.type') }}">
        <div v-if="errors.has('type')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('type') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('status'), 'has-success': fields.status && fields.status.valid }">
    <label for="status" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.broadcast-message.columns.status') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.status" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('status'), 'form-control-success': fields.status && fields.status.valid}" id="status" name="status" placeholder="{{ trans('admin.broadcast-message.columns.status') }}">
        <div v-if="errors.has('status')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('status') }}</div>
    </div>
</div>


