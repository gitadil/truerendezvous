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


Route::get('/register/confirm/{confirmationCode}', [
    'uses' => 'Auth\RegisterController@confirm'
]);

Route::get('/auth/confirm', [
    'uses' => 'Auth\RegisterController@confirm'
]);

Route::get('/personalinformation', 'PersonalInformationController@create');

Route::post('/personalinformation/store', 'PersonalInformationController@store');

Route::get('/educationinformation', 'EducationInformationController@index');
Route::get('/educationinformation/add', 'EducationInformationController@create');
//Route::get('/educationinformation/edit', 'EducationInformationController@create');
Route::get('/educationinformation/edit/{id}', 'EducationInformationController@create');

Route::post('/educationinformation/store', 'EducationInformationController@store');


Route::get('/contactinformation', 'ContactInformationController@create');
Route::post('/contactinformation/store', 'contactInformationController@store');


Route::get('/professionalinformation', 'ProfessionalInformationController@create');

Route::post('/professionalinformation/store', 'ProfessionalInformationController@store');

