<?php
Route::group(['prefix' => 'v2', 'as' => 'api.', 'namespace' => 'Api\V2'], function () {
    Route::post('register', 'WellsitesController@registerDevice')->name('register.device');
    Route::post('getstatus', 'WellsitesController@getConnectionStatus')->name('getstatus.device');
    Route::post('savedata', 'WellsitesController@saveData')->name('savedata.device');
    
});

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Products
    Route::post('products/media', 'ProductsApiController@storeMedia')->name('products.storeMedia');
    Route::apiResource('products', 'ProductsApiController');
});