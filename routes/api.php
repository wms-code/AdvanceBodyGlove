<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Fabrics
    Route::apiResource('fabrics', 'FabricApiController');

    // Stock Points
    Route::apiResource('stock-points', 'StockPointApiController');

    // Accounts
    Route::apiResource('accounts', 'AccountApiController');
});
