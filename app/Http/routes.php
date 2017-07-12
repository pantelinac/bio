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
    return view('main');
});

//CRUD patient 
Route::resource('patient', 'PatientController');

//Search by name patient
Route::post('search_name',['uses' => 'PatientController@search_name', 'as' => 'patient.search']);

//CRUD examinations 
Route::resource('examination', 'ExaminationController');