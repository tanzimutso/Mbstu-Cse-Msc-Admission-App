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

Route::get('/home', 'UserController@home')->name('home');
Route::get('/application-form', 'UserController@form')->name('form');
Route::post('/store', 'UserController@store')->name('applicant_details_store');
Route::get('{id}/delete', 'AdminController@destroy')->name('applicant_delete');
Route::get('/contact', 'UserController@contact')->name('contact');
Route::get('/applicants', 'AdminController@Applicants')->name('applicant-list');
Route::get('/search', 'AdminController@search')->name('search');
Route::get('/applicant-details', 'UserController@details')->name('details');
Route::get('/admit', 'UserController@admit')->name('admit');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
