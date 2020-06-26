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

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('students','StudentController');
Route::post('addcomments/{id}', 'CommentController@addComment')->name('addComments');
// Route::get('deletas/{id}', 'CommentController@delete')->name('deleteComments');
// Route::put('updates/{id}', 'CommentController@update')->name('updateComments');