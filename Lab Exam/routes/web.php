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

Route::get('/login','loginController@Login')->name('login.login');
Route::post('/login', 'loginController@ValidateLogin');
Route::get('/logout', 'logoutController@index')->name('logout');
Route::get('/registration', 'registrationController@Registration')->name('registration.emp');
Route::post('/registration', 'registrationController@Store');
Route::get('/home','homeController@Index')->name('home.index');
Route::get('/emphome','employeeController@Index')->name('emp.index');
Route::get('/emphome/job','employeeController@AddJob')->name('emp.addjob');
Route::post('/emphome/job','employeeController@StoreJob');
Route::get('/emphome/joblist','employeeController@JobList')->name('emp.joblist');
Route::get('/home/employees','homeController@Employeelist')->name('home.emps');