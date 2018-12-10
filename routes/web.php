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
Route::get('/contact', 'UserController@contact')->name('contact');
Route::get('/applicants-details', 'AdminController@Applicants')->name('applicant-list');
Route::get('/search', 'AdminController@search')->name('search');
