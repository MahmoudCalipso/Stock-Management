<?php

Route::group(['prefix' => 'v1', 'as' => 'admin.', 'namespace' => 'Api\V1\Admin'], function () {
    Route::apiResource('permissions', 'PermissionsApiController');

    Route::apiResource('roles', 'RolesApiController');

    Route::apiResource('users', 'UsersApiController');

    Route::apiResource('product-categories', 'ProductCategoryApiController');

    Route::apiResource('product-tags', 'ProductTagApiController');

    Route::apiResource('products', 'ProductApiController');

    Route::apiResource('task-statuses', 'TaskStatusApiController');

    Route::apiResource('task-tags', 'TaskTagApiController');

    Route::apiResource('tasks', 'TaskApiController');

    Route::apiResource('tasks-calendars', 'TasksCalendarApiController');
});
