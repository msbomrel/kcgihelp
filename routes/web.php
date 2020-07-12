<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/admin', function () {
    return view('auth.login');
});
Auth::routes();

/*backend controller*/
Route::get('/home', 'HelpPageController@index')->name('home')->middleware('auth');
Route::get('/add-page', 'HelpPageController@create')->name('create-page')->middleware('auth');
Route::post('/save-page', 'HelpPageController@store')->name('save-page')->middleware('auth');
Route::get('/show-page/{id}', 'HelpPageController@show')->name('show-page')->middleware('auth');
Route::get('/edit-page/{id}', 'HelpPageController@edit')->name('edit-page')->middleware('auth');
Route::post('/update-page', 'HelpPageController@update')->name('update-page')->middleware('auth');
Route::delete('/delete-page', 'HelpPageController@destroy')->name('delete-page')->middleware('auth');
Route::post('/upload', 'HelpPageController@uploadpicture')->name('upload')->middleware('auth');

/*frontend controllers*/
Route::get('/','FrontEndController@index');
Route::get('/{slug}', 'FrontEndController@page');
