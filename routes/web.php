<?php

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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


//Route::get('/home', 'HomeController@index')->name('home');


//Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix'=>'course'], function()
{
    Route::get('/', 'courseController@getTableAll')->name('course.index');

});

Route::group(['middleware' => ['auth:user'], 'prefix'=>'user'], function()
{
    Route::get('/', 'courseController@getTableByUser')->name('user.index');
    Route::get('/add/{id}', 'courseController@add')->name('user.add');
    Route::get('/delete/{id}', 'courseController@remove')->name('user.remove');

});

Route::group(['middleware' => ['auth:admin'], 'prefix'=>'admin'], function()
{
    Route::get('/', 'AdminController@getIndex')->name('admin.index');
    Route::get('/user', 'AdminController@getUser')->name('admin.user');
    Route::get('/course', 'AdminController@getCourse')->name('admin.course');
    Route::get('/teacher', 'AdminController@getTeacher')->name('admin.teacher');
    Route::get('/course/add/{id}', 'courseController@add')->name('course.add');
    Route::get('/course/delete/{id}', 'courseController@remove')->name('course.remove');
});

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotUserPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotUserPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');




include_once ('authUser.php');
include_once ('authAdmin.php');