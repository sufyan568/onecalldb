<div class="form-group row align-items-center" :class="{'has-danger': errors.has('datetime'), 'has-success': fields.datetime && fields.datetime.valid }">
    <label for="datetime" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.log.columns.datetime') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.datetime" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('datetime'), 'form-control-success': fields.datetime && fields.datetime.valid}" id="datetime" name="datetime" placeholder="{{ trans('admin.log.columns.datetime') }}">
        <div v-if="errors.has('datetime')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('datetime') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tag'), 'has-success': fields.tag && fields.tag.valid }">
    <label for="tag" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.log.columns.tag') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tag" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tag'), 'form-control-success': fields.tag && fields.tag.valid}" id="tag" name="tag" placeholder="{{ trans('admin.log.columns.tag') }}">
        <div v-if="errors.has('tag')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tag') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('value'), 'has-success': fields.value && fields.value.valid }">
    <label for="value" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.log.columns.value') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.value" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('value'), 'form-control-success': fields.value && fields.value.valid}" id="value" name="value" placeholder="{{ trans('admin.log.columns.value') }}">
        <div v-if="errors.has('value')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('value') }}</div>
    </div>
</div>


