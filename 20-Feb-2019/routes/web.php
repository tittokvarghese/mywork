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

Route::get('home/', 'PagesController@home');
Route::get('services/', 'PagesController@services');
Route::get('about/', 'PagesController@about');



Route::resource('created/','BooksController');




Route::get('data/', 'DatasController@home');



Route::get('/destroy/{id}', 'DatasController@destroy');
Route::get('/update/{id}', 'DatasController@update');





Auth::routes();

///Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
