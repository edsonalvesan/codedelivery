<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');

});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    
    Route::auth();

    Route::get('/home', 'HomeController@index');

Route::group(['prefix'=>'admin/categories','middleware'=>'auth.checkrole:admin','where'=>['id'=>'[0-9]+']],function() {

    Route::get('',            ['as'=>'admin.categories.index',   'uses'=>'CategoriesController@index']);

    Route::get('create',      ['as'=>'admin.categories.create',  'uses'=>'CategoriesController@create']);

    Route::post('store',      ['as'=>'admin.categories.store',   'uses'=>'CategoriesController@store']);

    Route::get('edit/{id}',   ['as'=>'admin.categories.edit',   'uses'=>'CategoriesController@edit']);

    Route::post('update/{id}',['as'=>'admin.categories.update',   'uses'=>'CategoriesController@update']);

});

Route::group(['prefix'=>'admin/products','middleware'=>'auth.checkrole:admin','where'=>['id'=>'[0-9]+']],function() {

    Route::get('',       ['as'=>'admin.products.index',   'uses'=>'ProductsController@index']);

    Route::get('create',['as'=>'admin.products.create',  'uses'=>'ProductsController@create']);

    Route::post('store',['as'=>'admin.products.store',   'uses'=>'ProductsController@store']);

    Route::get('edit/{id}',['as'=>'admin.products.edit',   'uses'=>'ProductsController@edit']);

    Route::post('update/{id}',['as'=>'admin.products.update',   'uses'=>'ProductsController@update']);

});

Route::group(['prefix'=>'admin/clients','middleware'=>'auth.checkrole:admin','where'=>['id'=>'[0-9]+']],function() {

    Route::get('',       ['as'=>'admin.clients.index',   'uses'=>'ClientsController@index']);

    Route::get('create',['as'=>'admin.clients.create',  'uses'=>'ClientsController@create']);

    Route::post('store',['as'=>'admin.clients.store',   'uses'=>'ClientsController@store']);

    Route::get('edit/{id}',['as'=>'admin.clients.edit',   'uses'=>'ClientsController@edit']);

    Route::post('update/{id}',['as'=>'admin.clients.update',   'uses'=>'ClientsController@update']);

});
    Route::group(['prefix'=>'admin/orders','middleware'=>'auth.checkrole:admin','where'=>['id'=>'[0-9]+']],function() {

        Route::get('',       ['as'=>'admin.orders.index',   'uses'=>'OrdersController@index']);

        Route::get('create',['as'=>'admin.orders.create',  'uses'=>'OrdersController@create']);

        Route::post('store',['as'=>'admin.orders.store',   'uses'=>'OrdersController@store']);

        Route::get('edit/{id}',['as'=>'admin.orders.edit',   'uses'=>'OrdersController@edit']);

        Route::post('update/{id}',['as'=>'admin.orders.update',   'uses'=>'OrdersController@update']);

    });

    Route::group(['prefix'=>'admin/cupoms','middleware'=>'auth.checkrole:admin','where'=>['id'=>'[0-9]+']],function() {

        Route::get('',       ['as'=>'admin.cupoms.index',   'uses'=>'CupomsController@index']);

        Route::get('create',['as'=>'admin.cupoms.create',  'uses'=>'CupomsController@create']);

        Route::post('store',['as'=>'admin.cupoms.store',   'uses'=>'CupomsController@store']);

        Route::get('edit/{id}',['as'=>'admin.cupoms.edit',   'uses'=>'CupomsController@edit']);

        Route::post('update/{id}',['as'=>'admin.cupoms.update',   'uses'=>'CupomsController@update']);

    });

    Route::group(['prefix'=>'customer','middleware'=>'auth.checkrole:client','where'=>['id'=>'[0-9]+']],function() {

        Route::get('order',       ['as'=>'customer.order.index','uses'=>'CheckoutController@index']);
        Route::get('order/create',['as'=>'customer.order.create','uses'=>'CheckoutController@create']);
        Route::post('order/store',['as'=>'customer.order.store','uses'=>'CheckoutController@store']);

    });

    Route::group(['middleware'=>'cors'],function() {

        Route::post('oauth/access_token', function() {
            return Response::json(Authorizer::issueAccessToken());
        });

        Route::group(['prefix'=>'api','middleware'=>'oauth', 'as'=>'api.'],function() {

            Route::group(['prefix'=>'client', 'middleware'=>'oauth.checkrole:client', 'as'=>'client.'],function() {
                Route::resource('order', 'Api\Client\ClientCheckoutController', ['except' => ['create', 'edit','destory']]);
                Route::get('products','Api\Client\ClientProductController@index');
            });

            Route::group(['prefix'=>'deliveryman', 'middleware'=>'oauth.checkrole:deliveryman', 'as'=>'deliveryman.'],function() {
                Route::resource('order', 'Api\Deliveryman\DeliverymanCheckoutController', ['except' => ['create', 'edit','destory','store']]);
                Route::patch('order/{id}/update-status/', ['uses' => 'Api\Deliveryman\DeliverymanCheckoutController@updateStatus', 'as' => 'orders.update_status']);
                Route::post('order/{id}/geo', ['as' => 'orders.geo', 'uses' => 'Api\Deliveryman\DeliverymanCheckoutController@geo']);
            });

            Route::get('authenticated','Api\UserController@authenticated');
            Route::patch('device_token','Api\UserController@updateDeviceToken');
            Route::get('cupom/{code}','Api\CupomController@show');

        });

    });


});


