<?php

// Route::redirect('/', '/login');
// Route::get('/home', function () {
    // if (session('status')) {
    //     return redirect()->route('admin.home')->with('status', session('status'));
    // }

    // return redirect()->route('admin.home');
// });

Auth::routes();

Route::domain('{subdomain}.' . config('app.short_url'))->group(function () {
    Route::get('/', 'HomeController@subdomainIndex')->name('subdomainIndex');
});

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Companies
    Route::delete('companies/destroy', 'CompaniesController@massDestroy')->name('companies.massDestroy');
    Route::post('companies/media', 'CompaniesController@storeMedia')->name('companies.storeMedia');
    Route::resource('companies', 'CompaniesController');

    // wellsites
    Route::delete('wellsites/destroy', 'WellsitesController@massDestroy')->name('wellsites.massDestroy');
    Route::resource('wellsites', 'WellsitesController');


    // company admins
    // Users
    Route::get('employees', 'UsersController@employeeIndex')->name('employees.index');
    Route::get('employees/create', 'UsersController@employeeCreate')->name('employees.create');
    Route::get('employees/edit/{id}', 'UsersController@employeeEdit')->name('employees.edit');
    Route::get('employees/show/{id}', 'UsersController@employeeEdit')->name('employees.show');
    Route::post('employees/store', 'UsersController@employeeStore')->name('employees.store');
    Route::put('employees/update/{id}', 'UsersController@employeeUpdate')->name('employees.update');
    Route::delete('employees/destroy/{id}', 'UsersController@employeeDestroy')->name('employees.destroy');
    Route::delete('employees/destroy', 'UsersController@massDestroy')->name('employees.massDestroy');

    // Users
    Route::get('well_sites', 'WellsitesController@employeeIndex')->name('well_sites.index');
    Route::get('well_sites/create', 'WellsitesController@employeeCreate')->name('well_sites.create');
    Route::get('well_sites/management/{id}', 'WellsitesController@employeeEdit')->name('well_sites.management');
    // Route::get('well_sites/management/{id}', 'WellsitesController@employeeEdit')->name('well_sites.storeManagement');
    // Route::get('well_sites/show/{id}', 'WellsitesController@employeeEdit')->name('well_sites.show');
    Route::post('well_sites/store', 'WellsitesController@employeeStore')->name('well_sites.store');
    Route::post('well_sites/assign_to_employee', 'WellsitesController@assignStore')->name('well_sites.assign_to_employee');
    Route::put('well_sites/update/{id}', 'WellsitesController@employeeUpdate')->name('well_sites.update');
    Route::delete('well_sites/destroy/{id}', 'WellsitesController@employeeDestroy')->name('well_sites.destroy');
    Route::delete('well_sites/destroy', 'WellsitesController@massDestroy')->name('well_sites.massDestroy');

    // Users
    Route::get('customers', 'WellsitesController@customersIndex')->name('customers.index');
    // Route::get('customers/create', 'WellsitesController@employeeCreate')->name('customers.create');
    // Route::get('customers/management/{id}', 'WellsitesController@employeeEdit')->name('customers.management');
    // Route::get('well_sites/management/{id}', 'WellsitesController@employeeEdit')->name('well_sites.storeManagement');
    // Route::get('well_sites/show/{id}', 'WellsitesController@employeeEdit')->name('well_sites.show');
    // Route::post('customers/store', 'WellsitesController@employeeStore')->name('well_sites.store');
    // Route::post('customers/assign_to_employee', 'WellsitesController@assignStore')->name('well_sites.assign_to_employee');
    // Route::put('customers/update/{id}', 'WellsitesController@employeeUpdate')->name('well_sites.update');
    // Route::delete('customers/destroy/{id}', 'WellsitesController@employeeDestroy')->name('well_sites.destroy');
    // Route::delete('customers/destroy', 'WellsitesController@massDestroy')->name('well_sites.massDestroy');
});