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
    return view('Homepage.Staff');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//staff routes

Route::get('Homepage/Staff', 'ViewController@Staff');
Route::get('Homepage/managestaff', 'ViewController@managestaff');
Route::get('Homepage/leave', 'ViewController@leave');
Route::get('Homepage/salary', 'ViewController@salary');

Route::resource('academics','AcademicController');
Route::resource('nonacademics','NonAcademicController');
Route::resource('leaverequests','LeaveRequestController');
Route::resource('nonleaverequests','NonLeaveRequestController');
Route::resource('academicsalaries','AcademicSalaryController');
Route::resource('nonacademicsalaries','NonAcademicSalaryController');