<div class="form-group row align-items-center" :class="{'has-danger': errors.has('datetime'), 'has-success': fields.datetime && fields.datetime.valid }">
    <label for="datetime" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.business-account.columns.datetime') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.datetime" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('datetime'), 'form-control-success': fields.datetime && fields.datetime.valid}" id="datetime" name="datetime" placeholder="{{ trans('admin.business-account.columns.datetime') }}">
        <div v-if="errors.has('datetime')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('datetime') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('business_id'), 'has-success': fields.business_id && fields.business_id.valid }">
    <label for="business_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.business-account.columns.business_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.business_id" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('business_id'), 'form-control-success': fields.business_id && fields.business_id.valid}" id="business_id" name="business_id" placeholder="{{ trans('admin.business-account.columns.business_id') }}">
        <div v-if="errors.has('business_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('business_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('debit'), 'has-success': fields.debit && fields.debit.valid }">
    <label for="debit" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.business-account.columns.debit') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.debit" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('debit'), 'form-control-success': fields.debit && fields.debit.valid}" id="debit" name="debit" placeholder="{{ trans('admin.business-account.columns.debit') }}">
        <div v-if="errors.has('debit')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('debit') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('credit'), 'has-success': fields.credit && fields.credit.valid }">
    <label for="credit" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.business-account.columns.credit') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.credit" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('credit'), 'form-control-success': fields.credit && fields.credit.valid}" id="credit" name="credit" placeholder="{{ trans('admin.business-account.columns.credit') }}">
        <div v-if="errors.has('credit')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('credit') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('balance'), 'has-success': fields.balance && fields.balance.valid }">
    <label for="balance" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.business-account.columns.balance') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.balance" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('balance'), 'form-control-success': fields.balance && fields.balance.valid}" id="balance" name="balance" placeholder="{{ trans('admin.business-account.columns.balance') }}">
        <div v-if="errors.has('balance')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('balance') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('currency'), 'has-success': fields.currency && fields.currency.valid }">
    <label for="currency" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.business-account.columns.currency') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.currency" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('currency'), 'form-control-success': fields.currency && fields.currency.valid}" id="currency" name="currency" placeholder="{{ trans('admin.business-account.columns.currency') }}">
        <div v-if="errors.has('currency')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('currency') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('discription'), 'has-success': fields.discription && fields.discription.valid }">
    <label for="discription" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.business-account.columns.discription') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.discription" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('discription'), 'form-control-success': fields.discription && fields.discription.valid}" id="discription" name="discription" placeholder="{{ trans('admin.business-account.columns.discription') }}">
        <div v-if="errors.has('discription')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('discription') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('type'), 'has-success': fields.type && fields.type.valid }">
    <label for="type" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.business-account.columns.type') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.type" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('type'), 'form-control-success': fields.type && fields.type.valid}" id="type" name="type" placeholder="{{ trans('admin.business-account.columns.type') }}">
        <div v-if="errors.has('type')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('type') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('status'), 'has-success': fields.status && fields.status.valid }">
    <label for="status" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.business-account.columns.status') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.status" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('status'), 'form-control-success': fields.status && fields.status.valid}" id="status" name="status" placeholder="{{ trans('admin.business-account.columns.status') }}">
        <div v-if="errors.has('status')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('status') }}</div>
    </div>
</div>


