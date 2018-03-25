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


//Route::group(['middleware' => 'news'], function () {
    Route::get('/news', 'NewsController@all_news');
    Route::get('/news/add', 'NewsController@add_post_form');
    Route::post('news/insert', 'NewsController@insert_news');
    Route::post('news/delete/{id?}', 'NewsController@delete');
//});


//Route::get('/news', 'NewsController@all_news')->middleware('news');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
