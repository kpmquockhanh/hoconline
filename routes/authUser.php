<?php
//Login as User

Route::get('login', 'Auth\user\LoginUserController@showLoginForm')->name('login');
Route::post('login', 'Auth\user\LoginUserController@login');
Route::get('/logout', 'Auth\user\LoginUserController@logout');
Route::post('logout', 'Auth\user\LoginUserController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\user\RegisterUserController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\user\RegisterUserController@register');

