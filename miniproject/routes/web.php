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
    return view('patient.makeAppt');
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

Route::get('/addSession', function () {
    return view('addSession');
});

Route::get('/addDoctor', function () {
    return view('admin.addDoctor');
});

Route::get('/updateDoctor', function () {
    return view('admin.updateDoctor');
});

Route::get('/patientList', function () {
    return view('admin.patientList');
});

Route::get('/addPatient', function () {
    return view('admin.addPatient');
});

Route::get('/apptDetails', function () {
    return view('receptionist.apptDetails');
});

Route::get('/docDetails', function () {
    return view('receptionist.docDetails');
});

Route::get('/dailySessions', function () {
    return view('receptionist.dailySessions');
});

Route::get('/patientDetails', function () {
    return view('receptionist.patientDetails');
});

Route::get('/makeApptRecep', function () {
    return view('receptionist.makeApptRecep');
});

Route::get('/mySessions', function () {
    return view('doctor.mySessions');
});

Route::get('/appointments', function () {
    return view('doctor.appointments');
});

Route::get('/patientProfl', function () {
    return view('doctor.patientProfl');
});

Route::get('/updatePatientProfile', function () {
    return view('doctor.updatePatientProfile');
});