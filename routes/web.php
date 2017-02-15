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
    return view('login');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/policereg', function () {
    return view('policereg');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/report', function () {
    return view('report');
});
Route::get('/polreport', function () {
    return view('polreport');
});
