<?php

use Illuminate\Support\Facades\Route;

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
Route::namespace('Admin')->group(function(){
		Route::get('login','AdminLoginController@index');
		Route::get('add-hospital','AddHospitalController@index');
		Route::get('i-have-covid-review','IHaveCovidReviewController@index');
		Route::get('iam-susbected-review','IamSusbectedReviewController@index');
		Route::get('review-doctors','ReviewDoctorController@index');
		Route::get('changeStatus_doctor','ReviewDoctorController@changeStatus');//new
		Route::get('review-nurse','ReviewNurseController@index');
});