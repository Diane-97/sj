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

/*Route::get('/', function () {
    return view('welcomedemo');
});*/

Route::resource('/',API\QuestionController::class);
Route::resource('/questions',API\QuestionController::class);
Route::resource('/answers',API\AnswerController::class);

Auth::routes();

Route::get('/home', 'API\QuestionController@index')->name('home');
<<<<<<< HEAD
Route::get('/about', 'API\aboutusController@index')->name('about');
=======
Route::get('about','API\aboutusController@index')->name('about');
Route::resource('contact','API\ContactusController');
>>>>>>> ea8f8499002da62e4952a395b8bd48431f406bf5
