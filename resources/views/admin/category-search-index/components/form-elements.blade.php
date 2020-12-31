<div class="form-group row align-items-center" :class="{'has-danger': errors.has('last_updated'), 'has-success': fields.last_updated && fields.last_updated.valid }">
    <label for="last_updated" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.category-search-index.columns.last_updated') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.last_updated" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('last_updated'), 'form-control-success': fields.last_updated && fields.last_updated.valid}" id="last_updated" name="last_updated" placeholder="{{ trans('admin.category-search-index.columns.last_updated') }}">
        <div v-if="errors.has('last_updated')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('last_updated') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('category'), 'has-success': fields.category && fields.category.valid }">
    <label for="category" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.category-search-index.columns.category') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.category" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('category'), 'form-control-success': fields.category && fields.category.valid}" id="category" name="category" placeholder="{{ trans('admin.category-search-index.columns.category') }}">
        <div v-if="errors.has('category')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('category') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('keywords'), 'has-success': fields.keywords && fields.keywords.valid }">
    <label for="keywords" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.category-search-index.columns.keywords') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.keywords" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('keywords'), 'form-control-success': fields.keywords && fields.keywords.valid}" id="keywords" name="keywords" placeholder="{{ trans('admin.category-search-index.columns.keywords') }}">
        <div v-if="errors.has('keywords')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('keywords') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('meta'), 'has-success': fields.meta && fields.meta.valid }">
    <label for="meta" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.category-search-index.columns.meta') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.meta" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('meta'), 'form-control-success': fields.meta && fields.meta.valid}" id="meta" name="meta" placeholder="{{ trans('admin.category-search-index.columns.meta') }}">
        <div v-if="errors.has('meta')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('meta') }}</div>
    </div>
</div>


