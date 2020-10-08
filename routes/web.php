<?php

use Illuminate\Support\Facades\Route;


Route::resource('/',API\QuestionController::class);

Route::resource('/questions',API\QuestionController::class);

Route::resource('/answers',API\AnswerController::class);

Auth::routes();

Route::get('/home', 'API\QuestionController@index')->name('home');

Route::get('about','API\aboutusController@index')->name('about');

Route::resource('contact','API\ContactusController');

Route::get('profile','UserController@index')->name('profile');

Route::post('profile_update','UserController@updateProfile');

Route::get('{path}','QuestionController@index')->where( 'path', '([A-z\d-/_.]+)?' );
Route::get('{path}','HomeController@index')->where( 'path', '([A-z\d-/_.]+)?' );

