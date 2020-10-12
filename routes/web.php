<?php

use Illuminate\Support\Facades\Route;
use App\Question;




Route::resource('/',API\QuestionController::class);

Route::resource('/questions',API\QuestionController::class);

Route::resource('/answers',API\AnswerController::class);
Route::resource('/profile',ProfileController::class);
Auth::routes();

Route::get('/home', 'API\QuestionController@index')->name('home');
Route::get('/about', 'API\aboutusController@index')->name('about');
Route::get('/search','API\QuestionController@search')->name('search');

Route::resource('contact','API\ContactusController');

Route::get('profile','UserController@index')->name('profile');

Route::post('profile_update','UserController@updateProfile');

Route::get('about','API\aboutusController@index')->name('about');

Route::get('{path}','QuestionController@index')->where( 'path', '([A-z\d-/_.]+)?' );



