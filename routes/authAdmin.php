<?php
//Login as Admin

Route::group(['prefix'=>'admin', 'namespace' => 'Auth\admin'], function()
{
    Route::get('login', 'LoginAdminController@showLoginForm')->name('admin.login');
    Route::post('login', 'LoginAdminController@login');
    Route::get('/logout', 'LoginAdminController@logout');
    Route::post('logout', 'LoginAdminController@logout')->name('admin.logout');

// Registration Routes...
    Route::get('register', 'RegisterAdminController@showRegistrationForm')->name('admin.register');
    Route::post('register', 'RegisterAdminController@register');
});
