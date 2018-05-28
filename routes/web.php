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

Route::get('/test', 'GetController@test');

Route::get('/', 'GetController@index')->name('home');

Route::get('/apply', 'GetController@apply')->name('apply');
Route::post('/apply', 'PostController@apply');

Route::post('/apply/student', 'StudentApplicationController@apply')->name('student-apply');

Route::get('/{category}/{page}', 'GetController@category')->name('category');


Route::get('/home', 'HomeController@index');

Route::get('/applications', 'GetController@applications')->name('applications');
Route::get('/applications/new/student', 'GetController@newStudent')->name('application-student');
Route::post('/applications/new/student', 'PostController@newStudent');
Route::get('/applications/student/information', 'StudentApplicationController@informationStudentApplication')->name('information.student.application');
Route::get('/applications/student/interests', 'StudentApplicationController@interestsStudentApplication')->name('interests.student.application');
Route::get('/applications/student/schools', 'StudentApplicationController@schoolsStudentApplication')->name('schools.student.application');
Route::get('/applications/student/abilities', 'StudentApplicationController@abilitiesStudentApplication')->name('abilities.student.application');
Route::get('/applications/student/household', 'StudentApplicationController@householdStudentApplication')->name('household.student.application');
Route::get('/applications/student/siblings', 'StudentApplicationController@siblingsStudentApplication')->name('siblings.student.application');
Route::get('/applications/student/parentQuestionair', 'StudentApplicationController@parentQuestionairStudentApplication')->name('parentQuestionair.student.application');
Route::get('/applications/student/studentQuestionair', 'StudentApplicationController@studentQuestionairStudentApplication')->name('studentQuestionair.student.application');
Route::get('/applications/student/recommendation', 'StudentApplicationController@recommendationStudentApplication')->name('recommendation.student.application');
Route::get('/applications/student/signature', 'StudentApplicationController@signatureStudentApplication')->name('signature.student.application');

Auth::routes();

Route::group(['middleware' => ['auth', 'superAdmin']], function() {
    Route::get('/cms', 'CMSController@index')->name('cms');

	Route::get('/cms/create/page', 'PageController@Creator')->name('page-creator');
	Route::post('/cms/create/page', 'PageController@existanceCheck');

	Route::get('/cms/create/category', 'CategoryController@Creator')->name('category-creator');
	Route::post('/cms/create/category', 'CategoryController@Create');
	Route::get('/cms/edit/page', 'CMSController@pages')->name('cms-pages');
	Route::get('/cms/edit/category', 'CMSController@categories')->name('cms-categories');
	Route::get('/cms/edit/{category}', 'CategoryController@edit')->name('category-editor');
	Route::post('/cms/edit/{category}', 'CategoryController@update');
	Route::post('/cms/edit/{category}/index', 'PageController@updateIndex');
	Route::get('/cms/edit/{category}/{page}', 'PageController@edit')->name('page-editor');
	Route::post('/cms/edit/{category}/{page}', 'PageController@update');

	Route::get('/cms/{category}/index', 'CategoryController@index');
});


// Route::get('/creator/page', 'PageController@Creator')->name('page-creator');
// Route::post('/creator/page', 'PageController@Create');
