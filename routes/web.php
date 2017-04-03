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
Route::resource('users', 'AgreementController');
Route::get('demo', function () {
    return view('demo');
});
Route::get('', function () {
    return view('auth.login');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/aprofile', function () {
    return view('aprofile');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/agreement', function () {
    return view('agreement');
});
Route::get('/report', function () {
    return view('report');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/password', function () {
    return view('password');
});
Route::get('/adminpassword', function () {
    return view('adminpassword');
});
Route::get('/polreport', function () {
    return view('polreport');
});
Route::get('/adminreport', function () {
    return view('adminreport');
});
Route::get('/family', function () {
    return view('family');
});
Route::get('/tenant', function () {
    return view('tenant');
});

Route::get('register','StationController@check');

Auth::routes();

Route::get('home', 'HomeController@index');
//Route::get('adminreport', 'UserController@show');
Route::get('report','AgreementController@show');
Route::get('polreport','AgreementController@showlimit');
//Route::post('admin','AdminController@check');
Route::post('family','AgreementController@create');
Route::post('agreement','FamilyController@create');
Route::post('station','StationController@create');
Route::get('profile','UserController@profile');
Route::post('profile','UserController@update_avatar');
Route::post('password','UserController@password');
Route::post('adminpassword','AdminController@password');

Route::get('aprofile','AdminController@profile');
Route::post('aprofile','AdminController@update_avatar');

Route::get('adminreport', ['uses'=>'UserController@datatable']);

Route::get('adminreport/getposts', ['as'=>'adminreport.getposts','uses'=>'UserController@getPosts']);

Route::get('station','StationController@display');

Route::get('station/{stationId}/delete', ['as' => 'delete/station', 'uses' => 'StationController@getDelete']);


Route::get('report', ['uses'=>'AgreementController@datatable']);

Route::get('report/getposts', ['as'=>'report.getposts','uses'=>'AgreementController@getPosts']);

Route::get('polreport', ['uses'=>'AgreementController@policedatatable']);

Route::get('polreport/getposts', ['as'=>'polreport.getposts','uses'=>'AgreementController@policegetPosts']);

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register');
    Route::get('home', 'HomeController@index');
});

Route::get('dashboard', 'UserController@googleLineChart');

Route::post('station/{stationId}/edit', 'StationController@postEdit');
Route::get('station/{stationId}/edit', ['as' => 'update/station', 'uses' => 'StationController@getEdit']);
