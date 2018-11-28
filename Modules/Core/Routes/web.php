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

Route::get('/', function () {
    return view('front.home');
});

Route::get('/authlogin', function () {
    return view('core::auth.login');
});

// Authentication Routes...
//$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', '\Modules\Core\Http\Controllers\Auth\LoginController@login')->name('postlogin');
$this->post('logout', '\Modules\Core\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');

// Dashboard
Route::get('/dashboard', '\Modules\Core\Http\Controllers\FrontendController@index')->name('frontenddash');

// Administrator & SuperAdministrator Control Panel Routes
Route::group(['prefix' => 'admincp', 'middleware' => 'auth', 'middleware' => ['role:administrator|owner'], 'namespace' => 'Admin'], function () {
    Route::resource('users', 'UsersController');
    Route::resource('permission', 'PermissionController');
    Route::resource('roles', 'RolesController');
});