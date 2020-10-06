<?php

use Illuminate\Support\Facades\Route;
use App\Question;

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
Route::resource('/profile',ProfileController::class);
Auth::routes();

Route::get('/home', 'API\QuestionController@index')->name('home');

Route::any('/search', 'API\QuestionController@search');

Route::resource('profile', 'UserController');
Route::get('profile', 'UserController@index')->name('profile');
Route::resource('/profileupdate',UserController::class);

//Route::get('users',  ['as' => 'users.index', 'uses' => 'UserController@index']);
//Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
//Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);
Route::get('about','API\aboutusController@index')->name('about');
Route::resource('contact','API\ContactusController');
