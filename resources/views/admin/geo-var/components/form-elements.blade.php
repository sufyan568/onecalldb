<div class="form-group row align-items-center" :class="{'has-danger': errors.has('datetime'), 'has-success': fields.datetime && fields.datetime.valid }">
    <label for="datetime" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.geo-var.columns.datetime') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.datetime" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('datetime'), 'form-control-success': fields.datetime && fields.datetime.valid}" id="datetime" name="datetime" placeholder="{{ trans('admin.geo-var.columns.datetime') }}">
        <div v-if="errors.has('datetime')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('datetime') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('comments'), 'has-success': fields.comments && fields.comments.valid }">
    <label for="comments" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.geo-var.columns.comments') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.comments" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('comments'), 'form-control-success': fields.comments && fields.comments.valid}" id="comments" name="comments" placeholder="{{ trans('admin.geo-var.columns.comments') }}">
        <div v-if="errors.has('comments')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('comments') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.geo-var.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.geo-var.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('description'), 'has-success': fields.description && fields.description.valid }">
    <label for="description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.geo-var.columns.description') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.description" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('description'), 'form-control-success': fields.description && fields.description.valid}" id="description" name="description" placeholder="{{ trans('admin.geo-var.columns.description') }}">
        <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('description') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('lat1'), 'has-success': fields.lat1 && fields.lat1.valid }">
    <label for="lat1" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.geo-var.columns.lat1') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.lat1" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('lat1'), 'form-control-success': fields.lat1 && fields.lat1.valid}" id="lat1" name="lat1" placeholder="{{ trans('admin.geo-var.columns.lat1') }}">
        <div v-if="errors.has('lat1')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('lat1') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('lng1'), 'has-success': fields.lng1 && fields.lng1.valid }">
    <label for="lng1" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.geo-var.columns.lng1') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.lng1" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('lng1'), 'form-control-success': fields.lng1 && fields.lng1.valid}" id="lng1" name="lng1" placeholder="{{ trans('admin.geo-var.columns.lng1') }}">
        <div v-if="errors.has('lng1')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('lng1') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('lat2'), 'has-success': fields.lat2 && fields.lat2.valid }">
    <label for="lat2" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.geo-var.columns.lat2') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.lat2" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('lat2'), 'form-control-success': fields.lat2 && fields.lat2.valid}" id="lat2" name="lat2" placeholder="{{ trans('admin.geo-var.columns.lat2') }}">
        <div v-if="errors.has('lat2')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('lat2') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('lng2'), 'has-success': fields.lng2 && fields.lng2.valid }">
    <label for="lng2" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.geo-var.columns.lng2') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.lng2" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('lng2'), 'form-control-success': fields.lng2 && fields.lng2.valid}" id="lng2" name="lng2" placeholder="{{ trans('admin.geo-var.columns.lng2') }}">
        <div v-if="errors.has('lng2')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('lng2') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tpl_var'), 'has-success': fields.tpl_var && fields.tpl_var.valid }">
    <label for="tpl_var" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.geo-var.columns.tpl_var') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tpl_var" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tpl_var'), 'form-control-success': fields.tpl_var && fields.tpl_var.valid}" id="tpl_var" name="tpl_var" placeholder="{{ trans('admin.geo-var.columns.tpl_var') }}">
        <div v-if="errors.has('tpl_var')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tpl_var') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tpl_val'), 'has-success': fields.tpl_val && fields.tpl_val.valid }">
    <label for="tpl_val" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.geo-var.columns.tpl_val') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tpl_val" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tpl_val'), 'form-control-success': fields.tpl_val && fields.tpl_val.valid}" id="tpl_val" name="tpl_val" placeholder="{{ trans('admin.geo-var.columns.tpl_val') }}">
        <div v-if="errors.has('tpl_val')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tpl_val') }}</div>
    </div>
</div>


