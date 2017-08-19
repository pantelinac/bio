<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//CRUD patient 
Route::resource('patient', 'PatientController');

//Search by name patient
Route::post('search_name',['uses' => 'PatientController@search_name', 'as' => 'patient.search']);

//OP examination
Route::post('examination/{patient_id}/op',['uses' => 'ExaminationController@store', 'as' => 'examination.store']);
Route::get('examination/{patient_id}/op/create', ['uses' => 'ExaminationController@create', 'as' => 'examination.create']);

//CA 1 examination
Route::post('examination/{patient_id}/ca1',['uses' => 'ExaminationController@storeca1', 'as' => 'examination.storeca1']);
Route::get('examination/{patient_id}/ca1/create', ['uses' => 'ExaminationController@createca1', 'as' => 'examination.createca1']);

//CA 2 examination
Route::post('examination/{patient_id}/ca2',['uses' => 'ExaminationController@storeca2', 'as' => 'examination.storeca2']);
Route::get('examination/{patient_id}/ca2/create', ['uses' => 'ExaminationController@createca2', 'as' => 'examination.createca2']);

//Delete examination
Route::delete('examination/{examination_id}', ['uses' => 'ExaminationController@destroy', 'as' => 'examination.destroy']);

//Show examination
Route::group(['prefix' => 'examination/'], function() {
Route::get('{examination_id}/op', ['uses' => 'ExaminationController@show', 'as' => 'examination.show']);
Route::get('{examination_id}/ca1', ['uses' => 'ExaminationController@showca1', 'as' => 'examination.showca1']);
Route::get('{examination_id}/ca2', ['uses' => 'ExaminationController@showca2', 'as' => 'examination.showca2']);
});


//Route::auth();
Route::post('login', 'Auth\AuthController@login');
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::get('logout', 'Auth\AuthController@logout');
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');


Route::get('/home', 'HomeController@index');

//Users
Route::get('users/create', ['uses' => 'UserController@create', 'as' => 'users.create']);
Route::post('users', ['uses' => 'UserController@store', 'as' => 'users.post']);
Route::get('users', ['uses' => 'UserController@index', 'as' => 'users.index']);
Route::delete('users/{user_id}', ['uses' => 'UserController@destroy', 'as' => 'users.destroy']);