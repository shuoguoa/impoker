<?php
/**
 * 登录验证
 */
Auth::routes();
Route::get('user/{id}', 'BateController@show');
Route::get('blade', function(){
    return view('child');
});

Route::get('/', 'HomeController@login');
Route::get('login', 'HomeController@login');
Route::group(['middleware' => 'auth'], function() {
    /**
     * 运营人员
     */
    Route::get('business', 'BusinessController@index');
    Route::get('business/create', 'BusinessController@create');
    Route::post('business/store', 'BusinessController@store');
    /**
     * 管理后台
     */
    Route::get('/admin/account', 'Admin\AccountController@index');
    Route::get('/admin/account/create', 'Admin\AccountController@create');
    Route::post('/admin/account/store', 'Admin\AccountController@store');
    Route::delete('/admin/account/{id}', 'Admin\AccountController@destroy');
    Route::put('/admin/account/{id}/{status}', 'Admin\AccountController@update');

    Route::get('admin/user', 'Admin\UserController@index');
    Route::get('admin/user/create', 'Admin\UserController@create');
    Route::post('admin/user/store', 'Admin\UserController@store');
    /**
     * 管理后台 > 权限管理 > 角色管理
     */
    Route::get('/admin/role', 'Admin\RoleController@index');
    Route::get('/admin/role/create', 'Admin\RoleController@create');
    Route::post('/admin/role/store', 'Admin\RoleController@store');
    Route::get('/admin/role/assign', 'Admin\RoleController@assign');
    Route::post('/admin/role/doAssign', 'Admin\RoleController@doAssign');
    Route::post('/admin/role/removal', 'Admin\RoleController@removal');
    /**
     * 管理后台 > 权限管理 > 权限管理
     */
    Route::get('/admin/permission', 'Admin\PermissionController@index');
    Route::get('/admin/permission/create', 'Admin\PermissionController@create');
    Route::post('/admin/permission/store', 'Admin\PermissionController@store');
    Route::get('/admin/permission/assign', 'Admin\PermissionController@assign');
    Route::post('/admin/permission/doAssign', 'Admin\PermissionController@doAssign');
    Route::post('/admin/permission/removal', 'Admin\PermissionController@removal');
});