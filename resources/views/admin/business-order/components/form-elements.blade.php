<div class="form-group row align-items-center" :class="{'has-danger': errors.has('datetime'), 'has-success': fields.datetime && fields.datetime.valid }">
    <label for="datetime" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.business-order.columns.datetime') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.datetime" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('datetime'), 'form-control-success': fields.datetime && fields.datetime.valid}" id="datetime" name="datetime" placeholder="{{ trans('admin.business-order.columns.datetime') }}">
        <div v-if="errors.has('datetime')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('datetime') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('buisness_id'), 'has-success': fields.buisness_id && fields.buisness_id.valid }">
    <label for="buisness_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.business-order.columns.buisness_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.buisness_id" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('buisness_id'), 'form-control-success': fields.buisness_id && fields.buisness_id.valid}" id="buisness_id" name="buisness_id" placeholder="{{ trans('admin.business-order.columns.buisness_id') }}">
        <div v-if="errors.has('buisness_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('buisness_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('buisness_account_id'), 'has-success': fields.buisness_account_id && fields.buisness_account_id.valid }">
    <label for="buisness_account_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.business-order.columns.buisness_account_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.buisness_account_id" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('buisness_account_id'), 'form-control-success': fields.buisness_account_id && fields.buisness_account_id.valid}" id="buisness_account_id" name="buisness_account_id" placeholder="{{ trans('admin.business-order.columns.buisness_account_id') }}">
        <div v-if="errors.has('buisness_account_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('buisness_account_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('from_username'), 'has-success': fields.from_username && fields.from_username.valid }">
    <label for="from_username" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.business-order.columns.from_username') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.from_username" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('from_username'), 'form-control-success': fields.from_username && fields.from_username.valid}" id="from_username" name="from_username" placeholder="{{ trans('admin.business-order.columns.from_username') }}">
        <div v-if="errors.has('from_username')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('from_username') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('category'), 'has-success': fields.category && fields.category.valid }">
    <label for="category" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.business-order.columns.category') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.category" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('category'), 'form-control-success': fields.category && fields.category.valid}" id="category" name="category" placeholder="{{ trans('admin.business-order.columns.category') }}">
        <div v-if="errors.has('category')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('category') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('query_id'), 'has-success': fields.query_id && fields.query_id.valid }">
    <label for="query_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.business-order.columns.query_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.query_id" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('query_id'), 'form-control-success': fields.query_id && fields.query_id.valid}" id="query_id" name="query_id" placeholder="{{ trans('admin.business-order.columns.query_id') }}">
        <div v-if="errors.has('query_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('query_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('delivery_id'), 'has-success': fields.delivery_id && fields.delivery_id.valid }">
    <label for="delivery_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.business-order.columns.delivery_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.delivery_id" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('delivery_id'), 'form-control-success': fields.delivery_id && fields.delivery_id.valid}" id="delivery_id" name="delivery_id" placeholder="{{ trans('admin.business-order.columns.delivery_id') }}">
        <div v-if="errors.has('delivery_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('delivery_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('comments'), 'has-success': fields.comments && fields.comments.valid }">
    <label for="comments" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.business-order.columns.comments') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.comments" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('comments'), 'form-control-success': fields.comments && fields.comments.valid}" id="comments" name="comments" placeholder="{{ trans('admin.business-order.columns.comments') }}">
        <div v-if="errors.has('comments')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('comments') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('status'), 'has-success': fields.status && fields.status.valid }">
    <label for="status" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.business-order.columns.status') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.status" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('status'), 'form-control-success': fields.status && fields.status.valid}" id="status" name="status" placeholder="{{ trans('admin.business-order.columns.status') }}">
        <div v-if="errors.has('status')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('status') }}</div>
    </div>
</div>


