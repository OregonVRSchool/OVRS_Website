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

Route::get('/test', 'CategoryController@Creator')->name('category-creator');
Route::post('/test', 'CategoryController@Create');
Route::get('/{category}/index', 'CategoryController@index');

Route::get('/creator/page', 'PageController@Creator')->name('page-creator');
Route::post('/creator/page', 'PageController@existanceCheck');

Route::get('/edit/{category}', 'CategoryController@edit');
Route::get('/edit/{category}/{page}', 'PageController@edit')->name('page-editor');
Route::post('/edit/{category}/{page}', 'PageController@pageUpdate');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/creator/page', 'PageController@Creator')->name('page-creator');
// Route::post('/creator/page', 'PageController@Create');
