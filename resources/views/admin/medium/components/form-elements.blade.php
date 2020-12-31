<div class="form-group row align-items-center" :class="{'has-danger': errors.has('model_type'), 'has-success': fields.model_type && fields.model_type.valid }">
    <label for="model_type" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.medium.columns.model_type') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.model_type" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('model_type'), 'form-control-success': fields.model_type && fields.model_type.valid}" id="model_type" name="model_type" placeholder="{{ trans('admin.medium.columns.model_type') }}">
        <div v-if="errors.has('model_type')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('model_type') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('model_id'), 'has-success': fields.model_id && fields.model_id.valid }">
    <label for="model_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.medium.columns.model_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.model_id" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('model_id'), 'form-control-success': fields.model_id && fields.model_id.valid}" id="model_id" name="model_id" placeholder="{{ trans('admin.medium.columns.model_id') }}">
        <div v-if="errors.has('model_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('model_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('uuid'), 'has-success': fields.uuid && fields.uuid.valid }">
    <label for="uuid" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.medium.columns.uuid') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.uuid" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('uuid'), 'form-control-success': fields.uuid && fields.uuid.valid}" id="uuid" name="uuid" placeholder="{{ trans('admin.medium.columns.uuid') }}">
        <div v-if="errors.has('uuid')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('uuid') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('collection_name'), 'has-success': fields.collection_name && fields.collection_name.valid }">
    <label for="collection_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.medium.columns.collection_name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.collection_name" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('collection_name'), 'form-control-success': fields.collection_name && fields.collection_name.valid}" id="collection_name" name="collection_name" placeholder="{{ trans('admin.medium.columns.collection_name') }}">
        <div v-if="errors.has('collection_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('collection_name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.medium.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.medium.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('file_name'), 'has-success': fields.file_name && fields.file_name.valid }">
    <label for="file_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.medium.columns.file_name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.file_name" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('file_name'), 'form-control-success': fields.file_name && fields.file_name.valid}" id="file_name" name="file_name" placeholder="{{ trans('admin.medium.columns.file_name') }}">
        <div v-if="errors.has('file_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('file_name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('mime_type'), 'has-success': fields.mime_type && fields.mime_type.valid }">
    <label for="mime_type" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.medium.columns.mime_type') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.mime_type" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('mime_type'), 'form-control-success': fields.mime_type && fields.mime_type.valid}" id="mime_type" name="mime_type" placeholder="{{ trans('admin.medium.columns.mime_type') }}">
        <div v-if="errors.has('mime_type')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('mime_type') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('disk'), 'has-success': fields.disk && fields.disk.valid }">
    <label for="disk" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.medium.columns.disk') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.disk" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('disk'), 'form-control-success': fields.disk && fields.disk.valid}" id="disk" name="disk" placeholder="{{ trans('admin.medium.columns.disk') }}">
        <div v-if="errors.has('disk')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('disk') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('conversions_disk'), 'has-success': fields.conversions_disk && fields.conversions_disk.valid }">
    <label for="conversions_disk" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.medium.columns.conversions_disk') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.conversions_disk" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('conversions_disk'), 'form-control-success': fields.conversions_disk && fields.conversions_disk.valid}" id="conversions_disk" name="conversions_disk" placeholder="{{ trans('admin.medium.columns.conversions_disk') }}">
        <div v-if="errors.has('conversions_disk')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('conversions_disk') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('size'), 'has-success': fields.size && fields.size.valid }">
    <label for="size" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.medium.columns.size') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.size" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('size'), 'form-control-success': fields.size && fields.size.valid}" id="size" name="size" placeholder="{{ trans('admin.medium.columns.size') }}">
        <div v-if="errors.has('size')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('size') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('manipulations'), 'has-success': fields.manipulations && fields.manipulations.valid }">
    <label for="manipulations" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.medium.columns.manipulations') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.manipulations" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('manipulations'), 'form-control-success': fields.manipulations && fields.manipulations.valid}" id="manipulations" name="manipulations" placeholder="{{ trans('admin.medium.columns.manipulations') }}">
        <div v-if="errors.has('manipulations')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('manipulations') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('custom_properties'), 'has-success': fields.custom_properties && fields.custom_properties.valid }">
    <label for="custom_properties" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.medium.columns.custom_properties') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.custom_properties" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('custom_properties'), 'form-control-success': fields.custom_properties && fields.custom_properties.valid}" id="custom_properties" name="custom_properties" placeholder="{{ trans('admin.medium.columns.custom_properties') }}">
        <div v-if="errors.has('custom_properties')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('custom_properties') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('genrated_conversions'), 'has-success': fields.genrated_conversions && fields.genrated_conversions.valid }">
    <label for="genrated_conversions" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.medium.columns.genrated_conversions') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.genrated_conversions" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('genrated_conversions'), 'form-control-success': fields.genrated_conversions && fields.genrated_conversions.valid}" id="genrated_conversions" name="genrated_conversions" placeholder="{{ trans('admin.medium.columns.genrated_conversions') }}">
        <div v-if="errors.has('genrated_conversions')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('genrated_conversions') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('responsive_images'), 'has-success': fields.responsive_images && fields.responsive_images.valid }">
    <label for="responsive_images" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.medium.columns.responsive_images') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.responsive_images" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('responsive_images'), 'form-control-success': fields.responsive_images && fields.responsive_images.valid}" id="responsive_images" name="responsive_images" placeholder="{{ trans('admin.medium.columns.responsive_images') }}">
        <div v-if="errors.has('responsive_images')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('responsive_images') }}</div>
    </div>
</div>


