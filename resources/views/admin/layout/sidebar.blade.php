<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
           <!--  <li class="nav-item"><a class="nav-link" href="{{ url('admin/users') }}"><i class="nav-icon icon-book-open"></i> {{ trans('admin.user.title') }}</a></li> -->
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/system-properties') }}"><i class="nav-icon icon-book-open"></i> {{ trans('admin.system-property.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/sms-logs') }}"><i class="nav-icon icon-compass"></i> {{ trans('admin.sms-log.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/activations') }}"><i class="nav-icon icon-drop"></i> {{ trans('admin.activation.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/logs') }}"><i class="nav-icon icon-puzzle"></i> {{ trans('admin.log.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/api-gateways') }}"><i class="nav-icon icon-plane"></i> {{ trans('admin.api-gateway.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/broadcast-messages') }}"><i class="nav-icon icon-magnet"></i> {{ trans('admin.broadcast-message.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/category-search-indices') }}"><i class="nav-icon icon-ghost"></i> {{ trans('admin.category-search-index.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/geo-vars') }}"><i class="nav-icon icon-magnet"></i> {{ trans('admin.geo-var.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/queries') }}"><i class="nav-icon icon-puzzle"></i> {{ trans('admin.query.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/user-segments') }}"><i class="nav-icon icon-plane"></i> {{ trans('admin.user-segment.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/query-messages') }}"><i class="nav-icon icon-flag"></i> {{ trans('admin.query-message.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/user-messges') }}"><i class="nav-icon icon-puzzle"></i> {{ trans('admin.user-messge.title') }}</a></li>
         <!--   <li class="nav-item"><a class="nav-link" href="{{ url('admin/admins') }}"><i class="nav-icon icon-flag"></i> {{ trans('admin.admin.title') }}</a></li> -->
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/business-accounts') }}"><i class="nav-icon icon-puzzle"></i> {{ trans('admin.business-account.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/business-orders') }}"><i class="nav-icon icon-flag"></i> {{ trans('admin.business-order.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/business-profiles') }}"><i class="nav-icon icon-drop"></i> {{ trans('admin.business-profile.title') }}</a></li>
          <!--  <li class="nav-item"><a class="nav-link" href="{{ url('admin/default-grocery-datasets') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.default-grocery-dataset.title') }}</a></li> -->
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/markers') }}"><i class="nav-icon icon-globe"></i> {{ trans('admin.marker.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/media') }}"><i class="nav-icon icon-energy"></i> {{ trans('admin.medium.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/message-files') }}"><i class="nav-icon icon-book-open"></i> {{ trans('admin.message-file.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/default-groceries') }}"><i class="nav-icon icon-flag"></i> {{ trans('admin.default-grocery.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
