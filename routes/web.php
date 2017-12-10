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

Route::get('/',[
	'as' => 'dashboard',
	'uses' => 'Dashboard\DashboardController@index'
]);

Route::get('school/register',[
	'as' => 'school.register',
	'uses' => 'School\SchoolRegisterController@index'
]);
Route::get('student/register',[
	'as' => 'student.register',
	'uses' => 'Student\StudentRegisterController@index'
]);
Route::get('get/districts/{key?}',[
	'as' => 'districts',
	'uses' => 'School\SchoolRegisterController@districts'
]);

Route::get('school/part/two/registration',[
	'as' => 'school.part.two.registration.form',
	'uses' => 'School\SchoolRegisterController@partTwoSchoolRegistrationForm'
]);

Route::post('school/part/two/registration',[
	'as' => 'school.part.two.registration.save',
	'uses' => 'School\SchoolRegisterController@partTwoSchoolRegistrationSave'
]);

