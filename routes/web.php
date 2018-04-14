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



Route::get('/cms', 'CMSController@index')->name('cms');

Route::get('/cms/create/page', 'PageController@Creator')->name('page-creator');
Route::post('/cms/create/page', 'PageController@existanceCheck');

Route::get('/cms/create/category', 'CategoryController@Creator')->name('category-creator');
Route::post('/cms/create/category', 'CategoryController@Create');
Route::get('/cms/edit/page', 'CMSController@pages');
Route::get('/cms/edit/category', 'CMSController@categories');
Route::get('/cms/edit/{category}', 'CategoryController@edit');
Route::get('/cms/edit/{category}/{page}', 'PageController@edit')->name('page-editor');
Route::post('/cms/edit/{category}/{page}', 'PageController@pageUpdate');

Route::get('/cms/{category}/index', 'CategoryController@index');
Route::get('/{category}/{page}', 'PageController@index')->name('page');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/creator/page', 'PageController@Creator')->name('page-creator');
// Route::post('/creator/page', 'PageController@Create');
