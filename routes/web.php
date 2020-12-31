<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('users')->name('users/')->group(static function() {
            Route::get('/',                                             'UsersController@index')->name('index');
            Route::get('/create',                                       'UsersController@create')->name('create');
            Route::post('/',                                            'UsersController@store')->name('store');
            Route::get('/{user}/edit','UsersController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'UsersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{user}',                                      'UsersController@update')->name('update');
            Route::delete('/{user}',                                    'UsersController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('system-properties')->name('system-properties/')->group(static function() {
            Route::get('/',                                             'SystemPropertiesController@index')->name('index');
            Route::get('/create',                                       'SystemPropertiesController@create')->name('create');
            Route::post('/',                                            'SystemPropertiesController@store')->name('store');
            Route::get('/{systemProperty}/edit',                        'SystemPropertiesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'SystemPropertiesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{systemProperty}',                            'SystemPropertiesController@update')->name('update');
            Route::delete('/{systemProperty}',                          'SystemPropertiesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('sms-logs')->name('sms-logs/')->group(static function() {
            Route::get('/',                                             'SmsLogController@index')->name('index');
            Route::get('/create',                                       'SmsLogController@create')->name('create');
            Route::post('/',                                            'SmsLogController@store')->name('store');
            Route::get('/{smsLog}/edit',                                'SmsLogController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'SmsLogController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{smsLog}',                                    'SmsLogController@update')->name('update');
            Route::delete('/{smsLog}',                                  'SmsLogController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('activations')->name('activations/')->group(static function() {
            Route::get('/',                                             'ActivationsController@index')->name('index');
            Route::get('/create',                                       'ActivationsController@create')->name('create');
            Route::post('/',                                            'ActivationsController@store')->name('store');
            Route::get('/{activation}/edit',                            'ActivationsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ActivationsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{activation}',                                'ActivationsController@update')->name('update');
            Route::delete('/{activation}',                              'ActivationsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('logs')->name('logs/')->group(static function() {
            Route::get('/',                                             'LogController@index')->name('index');
            Route::get('/create',                                       'LogController@create')->name('create');
            Route::post('/',                                            'LogController@store')->name('store');
            Route::get('/{log}/edit',                                   'LogController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'LogController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{log}',                                       'LogController@update')->name('update');
            Route::delete('/{log}',                                     'LogController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('api-gateways')->name('api-gateways/')->group(static function() {
            Route::get('/',                                             'ApiGatewayController@index')->name('index');
            Route::get('/create',                                       'ApiGatewayController@create')->name('create');
            Route::post('/',                                            'ApiGatewayController@store')->name('store');
            Route::get('/{apiGateway}/edit',                            'ApiGatewayController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ApiGatewayController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{apiGateway}',                                'ApiGatewayController@update')->name('update');
            Route::delete('/{apiGateway}',                              'ApiGatewayController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('broadcast-messages')->name('broadcast-messages/')->group(static function() {
            Route::get('/',                                             'BroadcastMessagesController@index')->name('index');
            Route::get('/create',                                       'BroadcastMessagesController@create')->name('create');
            Route::post('/',                                            'BroadcastMessagesController@store')->name('store');
            Route::get('/{broadcastMessage}/edit',                      'BroadcastMessagesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'BroadcastMessagesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{broadcastMessage}',                          'BroadcastMessagesController@update')->name('update');
            Route::delete('/{broadcastMessage}',                        'BroadcastMessagesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('category-search-indices')->name('category-search-indices/')->group(static function() {
            Route::get('/',                                             'CategorySearchIndexController@index')->name('index');
            Route::get('/create',                                       'CategorySearchIndexController@create')->name('create');
            Route::post('/',                                            'CategorySearchIndexController@store')->name('store');
            Route::get('/{categorySearchIndex}/edit',                   'CategorySearchIndexController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CategorySearchIndexController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{categorySearchIndex}',                       'CategorySearchIndexController@update')->name('update');
            Route::delete('/{categorySearchIndex}',                     'CategorySearchIndexController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('geo-vars')->name('geo-vars/')->group(static function() {
            Route::get('/',                                             'GeoVarsController@index')->name('index');
            Route::get('/create',                                       'GeoVarsController@create')->name('create');
            Route::post('/',                                            'GeoVarsController@store')->name('store');
            Route::get('/{geoVar}/edit',                                'GeoVarsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'GeoVarsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{geoVar}',                                    'GeoVarsController@update')->name('update');
            Route::delete('/{geoVar}',                                  'GeoVarsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('queries')->name('queries/')->group(static function() {
            Route::get('/',                                             'QueriesController@index')->name('index');
            Route::get('/create',                                       'QueriesController@create')->name('create');
            Route::post('/',                                            'QueriesController@store')->name('store');
            Route::get('/{query}/edit',                                 'QueriesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'QueriesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{query}',                                     'QueriesController@update')->name('update');
            Route::delete('/{query}',                                   'QueriesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('user-segments')->name('user-segments/')->group(static function() {
            Route::get('/',                                             'UserSegmentsController@index')->name('index');
            Route::get('/create',                                       'UserSegmentsController@create')->name('create');
            Route::post('/',                                            'UserSegmentsController@store')->name('store');
            Route::get('/{userSegment}/edit',                           'UserSegmentsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'UserSegmentsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{userSegment}',                               'UserSegmentsController@update')->name('update');
            Route::delete('/{userSegment}',                             'UserSegmentsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('query-messages')->name('query-messages/')->group(static function() {
            Route::get('/',                                             'QueryMessagesController@index')->name('index');
            Route::get('/create',                                       'QueryMessagesController@create')->name('create');
            Route::post('/',                                            'QueryMessagesController@store')->name('store');
            Route::get('/{queryMessage}/edit',                          'QueryMessagesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'QueryMessagesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{queryMessage}',                              'QueryMessagesController@update')->name('update');
            Route::delete('/{queryMessage}',                            'QueryMessagesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('user-messges')->name('user-messges/')->group(static function() {
            Route::get('/',                                             'UserMessgesController@index')->name('index');
            Route::get('/create',                                       'UserMessgesController@create')->name('create');
            Route::post('/',                                            'UserMessgesController@store')->name('store');
            Route::get('/{userMessge}/edit',                            'UserMessgesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'UserMessgesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{userMessge}',                                'UserMessgesController@update')->name('update');
            Route::delete('/{userMessge}',                              'UserMessgesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admins')->name('admins/')->group(static function() {
            Route::get('/',                                             'AdminController@index')->name('index');
            Route::get('/create',                                       'AdminController@create')->name('create');
            Route::post('/',                                            'AdminController@store')->name('store');
            Route::get('/{admin}/edit',                                 'AdminController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'AdminController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{admin}',                                     'AdminController@update')->name('update');
            Route::delete('/{admin}',                                   'AdminController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('business-accounts')->name('business-accounts/')->group(static function() {
            Route::get('/',                                             'BusinessAccountController@index')->name('index');
            Route::get('/create',                                       'BusinessAccountController@create')->name('create');
            Route::post('/',                                            'BusinessAccountController@store')->name('store');
            Route::get('/{businessAccount}/edit',                       'BusinessAccountController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'BusinessAccountController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{businessAccount}',                           'BusinessAccountController@update')->name('update');
            Route::delete('/{businessAccount}',                         'BusinessAccountController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('business-orders')->name('business-orders/')->group(static function() {
            Route::get('/',                                             'BusinessOrdersController@index')->name('index');
            Route::get('/create',                                       'BusinessOrdersController@create')->name('create');
            Route::post('/',                                            'BusinessOrdersController@store')->name('store');
            Route::get('/{businessOrder}/edit',                         'BusinessOrdersController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'BusinessOrdersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{businessOrder}',                             'BusinessOrdersController@update')->name('update');
            Route::delete('/{businessOrder}',                           'BusinessOrdersController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('business-profiles')->name('business-profiles/')->group(static function() {
            Route::get('/',                                             'BusinessProfileController@index')->name('index');
            Route::get('/create',                                       'BusinessProfileController@create')->name('create');
            Route::post('/',                                            'BusinessProfileController@store')->name('store');
            Route::get('/{businessProfile}/edit',                       'BusinessProfileController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'BusinessProfileController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{businessProfile}',                           'BusinessProfileController@update')->name('update');
            Route::delete('/{businessProfile}',                         'BusinessProfileController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('default-grocery-datasets')->name('default-grocery-datasets/')->group(static function() {
            Route::get('/',                                             'DefaultGroceryDatasetController@index')->name('index');
            Route::get('/create',                                       'DefaultGroceryDatasetController@create')->name('create');
            Route::post('/',                                            'DefaultGroceryDatasetController@store')->name('store');
            Route::get('/{defaultGroceryDataset}/edit',                 'DefaultGroceryDatasetController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'DefaultGroceryDatasetController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{defaultGroceryDataset}',                     'DefaultGroceryDatasetController@update')->name('update');
            Route::delete('/{defaultGroceryDataset}',                   'DefaultGroceryDatasetController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('markers')->name('markers/')->group(static function() {
            Route::get('/',                                             'MarkersController@index')->name('index');
            Route::get('/create',                                       'MarkersController@create')->name('create');
            Route::post('/',                                            'MarkersController@store')->name('store');
            Route::get('/{marker}/edit',                                'MarkersController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'MarkersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{marker}',                                    'MarkersController@update')->name('update');
            Route::delete('/{marker}',                                  'MarkersController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('media')->name('media/')->group(static function() {
            Route::get('/',                                             'MediaController@index')->name('index');
            Route::get('/create',                                       'MediaController@create')->name('create');
            Route::post('/',                                            'MediaController@store')->name('store');
            Route::get('/{medium}/edit',                                'MediaController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'MediaController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{medium}',                                    'MediaController@update')->name('update');
            Route::delete('/{medium}',                                  'MediaController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('message-files')->name('message-files/')->group(static function() {
            Route::get('/',                                             'MessageFilesController@index')->name('index');
            Route::get('/create',                                       'MessageFilesController@create')->name('create');
            Route::post('/',                                            'MessageFilesController@store')->name('store');
            Route::get('/{messageFile}/edit',                           'MessageFilesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'MessageFilesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{messageFile}',                               'MessageFilesController@update')->name('update');
            Route::delete('/{messageFile}',                             'MessageFilesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('default-groceries')->name('default-groceries/')->group(static function() {
            Route::get('/',                                             'DefaultGroceryController@index')->name('index');
            Route::get('/create',                                       'DefaultGroceryController@create')->name('create');
            Route::post('/',                                            'DefaultGroceryController@store')->name('store');
            Route::get('/{defaultGrocery}/edit',                        'DefaultGroceryController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'DefaultGroceryController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{defaultGrocery}',                            'DefaultGroceryController@update')->name('update');
            Route::delete('/{defaultGrocery}',                          'DefaultGroceryController@destroy')->name('destroy');
        });
    });
});