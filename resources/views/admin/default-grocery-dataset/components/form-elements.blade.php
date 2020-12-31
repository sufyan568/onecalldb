<div class="form-group row align-items-center" :class="{'has-danger': errors.has('product_id'), 'has-success': fields.product_id && fields.product_id.valid }">
    <label for="product_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.default-grocery-dataset.columns.product_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.product_id" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('product_id'), 'form-control-success': fields.product_id && fields.product_id.valid}" id="product_id" name="product_id" placeholder="{{ trans('admin.default-grocery-dataset.columns.product_id') }}">
        <div v-if="errors.has('product_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('product_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('categroy'), 'has-success': fields.categroy && fields.categroy.valid }">
    <label for="categroy" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.default-grocery-dataset.columns.categroy') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.categroy" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('categroy'), 'form-control-success': fields.categroy && fields.categroy.valid}" id="categroy" name="categroy" placeholder="{{ trans('admin.default-grocery-dataset.columns.categroy') }}">
        <div v-if="errors.has('categroy')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('categroy') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('product_name'), 'has-success': fields.product_name && fields.product_name.valid }">
    <label for="product_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.default-grocery-dataset.columns.product_name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.product_name" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('product_name'), 'form-control-success': fields.product_name && fields.product_name.valid}" id="product_name" name="product_name" placeholder="{{ trans('admin.default-grocery-dataset.columns.product_name') }}">
        <div v-if="errors.has('product_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('product_name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('weight_packing'), 'has-success': fields.weight_packing && fields.weight_packing.valid }">
    <label for="weight_packing" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.default-grocery-dataset.columns.weight_packing') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.weight_packing" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('weight_packing'), 'form-control-success': fields.weight_packing && fields.weight_packing.valid}" id="weight_packing" name="weight_packing" placeholder="{{ trans('admin.default-grocery-dataset.columns.weight_packing') }}">
        <div v-if="errors.has('weight_packing')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('weight_packing') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('description'), 'has-success': fields.description && fields.description.valid }">
    <label for="description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.default-grocery-dataset.columns.description') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.description" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('description'), 'form-control-success': fields.description && fields.description.valid}" id="description" name="description" placeholder="{{ trans('admin.default-grocery-dataset.columns.description') }}">
        <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('description') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('price'), 'has-success': fields.price && fields.price.valid }">
    <label for="price" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.default-grocery-dataset.columns.price') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.price" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('price'), 'form-control-success': fields.price && fields.price.valid}" id="price" name="price" placeholder="{{ trans('admin.default-grocery-dataset.columns.price') }}">
        <div v-if="errors.has('price')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('price') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('currency'), 'has-success': fields.currency && fields.currency.valid }">
    <label for="currency" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.default-grocery-dataset.columns.currency') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.currency" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('currency'), 'form-control-success': fields.currency && fields.currency.valid}" id="currency" name="currency" placeholder="{{ trans('admin.default-grocery-dataset.columns.currency') }}">
        <div v-if="errors.has('currency')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('currency') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('images'), 'has-success': fields.images && fields.images.valid }">
    <label for="images" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.default-grocery-dataset.columns.images') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.images" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('images'), 'form-control-success': fields.images && fields.images.valid}" id="images" name="images" placeholder="{{ trans('admin.default-grocery-dataset.columns.images') }}">
        <div v-if="errors.has('images')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('images') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('meta'), 'has-success': fields.meta && fields.meta.valid }">
    <label for="meta" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.default-grocery-dataset.columns.meta') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.meta" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('meta'), 'form-control-success': fields.meta && fields.meta.valid}" id="meta" name="meta" placeholder="{{ trans('admin.default-grocery-dataset.columns.meta') }}">
        <div v-if="errors.has('meta')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('meta') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('status'), 'has-success': fields.status && fields.status.valid }">
    <label for="status" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.default-grocery-dataset.columns.status') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.status" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('status'), 'form-control-success': fields.status && fields.status.valid}" id="status" name="status" placeholder="{{ trans('admin.default-grocery-dataset.columns.status') }}">
        <div v-if="errors.has('status')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('status') }}</div>
    </div>
</div>


