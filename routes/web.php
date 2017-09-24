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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/register/confirm/{confirmationCode}', [
    'uses' => 'Auth\RegisterController@confirm'
]);

Route::get('/auth/confirm', [
    'uses' => 'Auth\RegisterController@confirm'
]);

Route::get('/personal', 'PersonalInformationController@create');


Route::post('/personal/store', 'PersonalInformationController@store');

Route::get('/education', 'EducationInformationController@index');
Route::get('/education/add', 'EducationInformationController@create');
//Route::get('/education/edit', 'EducationInformationController@create');
Route::get('/education/edit/{id}', 'EducationInformationController@create');

Route::post('/education/store', 'EducationInformationController@store');


Route::get('/contact', 'ContactInformationController@create');
Route::post('/contact/store', 'contactInformationController@store');

Route::get('/partner', 'PartnerInformationController@create');

Route::post('/partner/store', 'PartnerInformationController@store');


Route::get('/profession', 'ProfessionalInformationController@create');

Route::post('/profession/store', 'ProfessionalInformationController@store');

Route::get('/search', 'SearchController@index');

Route::get('/admin', 'PersonalInformationController@admin');

