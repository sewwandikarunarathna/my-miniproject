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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/makeAppt', function () {
    return view('makeAppt');
});

Route::get('/channelDet', function () {
    return view('patient.channelingDetails');
});

Route::get('/myAppt', function () {
    return view('patient.myAppt');
});

Route::get('/myProfile', function () {
    return view('patient.myProfile');
});

Route::get('/updateProfile', function () {
    return view('patient.updateProfile');
});

Route::get('/changePassword', function () {
    return view('changePassword');
});

Route::get('/empRegister', function () {
    return view('admin.empRegister');
});

Route::get('/addEmp', function () {
    return view('admin.addEmp');
});

Route::get('/updateEmp', function () {
    return view('admin.updateEmp');
});

Route::get('/doctorList', function () {
    return view('admin.doctorList');
});

Route::get('/viewSessions', function () {
    return view('viewSessions');
});