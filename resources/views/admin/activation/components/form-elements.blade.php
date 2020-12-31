<div class="form-group row align-items-center" :class="{'has-danger': errors.has('email'), 'has-success': fields.email && fields.email.valid }">
    <label for="email" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.activation.columns.email') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.email" v-validate="'email'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('email'), 'form-control-success': fields.email && fields.email.valid}" id="email" name="email" placeholder="{{ trans('admin.activation.columns.email') }}">
        <div v-if="errors.has('email')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('email') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('token'), 'has-success': fields.token && fields.token.valid }">
    <label for="token" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.activation.columns.token') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.token" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('token'), 'form-control-success': fields.token && fields.token.valid}" id="token" name="token" placeholder="{{ trans('admin.activation.columns.token') }}">
        <div v-if="errors.has('token')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('token') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('used'), 'has-success': fields.used && fields.used.valid }">
    <label for="used" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.activation.columns.used') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.used" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('used'), 'form-control-success': fields.used && fields.used.valid}" id="used" name="used" placeholder="{{ trans('admin.activation.columns.used') }}">
        <div v-if="errors.has('used')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('used') }}</div>
    </div>
</div>


