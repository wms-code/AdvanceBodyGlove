<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

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

    // Colours
    Route::delete('colours/destroy', 'ColourController@massDestroy')->name('colours.massDestroy');
    Route::resource('colours', 'ColourController');

    // Fabrics
    Route::delete('fabrics/destroy', 'FabricController@massDestroy')->name('fabrics.massDestroy');
    Route::post('fabrics/parse-csv-import', 'FabricController@parseCsvImport')->name('fabrics.parseCsvImport');
    Route::post('fabrics/process-csv-import', 'FabricController@processCsvImport')->name('fabrics.processCsvImport');
    Route::resource('fabrics', 'FabricController');

    // Stock Points
    Route::delete('stock-points/destroy', 'StockPointController@massDestroy')->name('stock-points.massDestroy');
    Route::post('stock-points/parse-csv-import', 'StockPointController@parseCsvImport')->name('stock-points.parseCsvImport');
    Route::post('stock-points/process-csv-import', 'StockPointController@processCsvImport')->name('stock-points.processCsvImport');
    Route::resource('stock-points', 'StockPointController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Accounts
    Route::delete('accounts/destroy', 'AccountController@massDestroy')->name('accounts.massDestroy');
    Route::post('accounts/parse-csv-import', 'AccountController@parseCsvImport')->name('accounts.parseCsvImport');
    Route::post('accounts/process-csv-import', 'AccountController@processCsvImport')->name('accounts.processCsvImport');
    Route::resource('accounts', 'AccountController');

    Route::get('global-search', 'GlobalSearchController@search')->name('globalSearch');
});
