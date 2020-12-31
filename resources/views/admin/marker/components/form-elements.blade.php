<div class="form-group row align-items-center" :class="{'has-danger': errors.has('place_id'), 'has-success': fields.place_id && fields.place_id.valid }">
    <label for="place_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.marker.columns.place_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.place_id" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('place_id'), 'form-control-success': fields.place_id && fields.place_id.valid}" id="place_id" name="place_id" placeholder="{{ trans('admin.marker.columns.place_id') }}">
        <div v-if="errors.has('place_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('place_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.marker.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.marker.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tel_country_code'), 'has-success': fields.tel_country_code && fields.tel_country_code.valid }">
    <label for="tel_country_code" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.marker.columns.tel_country_code') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tel_country_code" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tel_country_code'), 'form-control-success': fields.tel_country_code && fields.tel_country_code.valid}" id="tel_country_code" name="tel_country_code" placeholder="{{ trans('admin.marker.columns.tel_country_code') }}">
        <div v-if="errors.has('tel_country_code')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tel_country_code') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('phone'), 'has-success': fields.phone && fields.phone.valid }">
    <label for="phone" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.marker.columns.phone') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.phone" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('phone'), 'form-control-success': fields.phone && fields.phone.valid}" id="phone" name="phone" placeholder="{{ trans('admin.marker.columns.phone') }}">
        <div v-if="errors.has('phone')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('phone') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('address'), 'has-success': fields.address && fields.address.valid }">
    <label for="address" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.marker.columns.address') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.address" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('address'), 'form-control-success': fields.address && fields.address.valid}" id="address" name="address" placeholder="{{ trans('admin.marker.columns.address') }}">
        <div v-if="errors.has('address')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('address') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('city'), 'has-success': fields.city && fields.city.valid }">
    <label for="city" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.marker.columns.city') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.city" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('city'), 'form-control-success': fields.city && fields.city.valid}" id="city" name="city" placeholder="{{ trans('admin.marker.columns.city') }}">
        <div v-if="errors.has('city')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('city') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('region'), 'has-success': fields.region && fields.region.valid }">
    <label for="region" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.marker.columns.region') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.region" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('region'), 'form-control-success': fields.region && fields.region.valid}" id="region" name="region" placeholder="{{ trans('admin.marker.columns.region') }}">
        <div v-if="errors.has('region')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('region') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('country'), 'has-success': fields.country && fields.country.valid }">
    <label for="country" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.marker.columns.country') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.country" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('country'), 'form-control-success': fields.country && fields.country.valid}" id="country" name="country" placeholder="{{ trans('admin.marker.columns.country') }}">
        <div v-if="errors.has('country')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('country') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('lat'), 'has-success': fields.lat && fields.lat.valid }">
    <label for="lat" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.marker.columns.lat') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.lat" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('lat'), 'form-control-success': fields.lat && fields.lat.valid}" id="lat" name="lat" placeholder="{{ trans('admin.marker.columns.lat') }}">
        <div v-if="errors.has('lat')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('lat') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('lng'), 'has-success': fields.lng && fields.lng.valid }">
    <label for="lng" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.marker.columns.lng') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.lng" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('lng'), 'form-control-success': fields.lng && fields.lng.valid}" id="lng" name="lng" placeholder="{{ trans('admin.marker.columns.lng') }}">
        <div v-if="errors.has('lng')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('lng') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('timezone'), 'has-success': fields.timezone && fields.timezone.valid }">
    <label for="timezone" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.marker.columns.timezone') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.timezone" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('timezone'), 'form-control-success': fields.timezone && fields.timezone.valid}" id="timezone" name="timezone" placeholder="{{ trans('admin.marker.columns.timezone') }}">
        <div v-if="errors.has('timezone')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('timezone') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('photo_urls'), 'has-success': fields.photo_urls && fields.photo_urls.valid }">
    <label for="photo_urls" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.marker.columns.photo_urls') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.photo_urls" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('photo_urls'), 'form-control-success': fields.photo_urls && fields.photo_urls.valid}" id="photo_urls" name="photo_urls" placeholder="{{ trans('admin.marker.columns.photo_urls') }}">
        <div v-if="errors.has('photo_urls')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('photo_urls') }}</div>
    </div>
</div>


