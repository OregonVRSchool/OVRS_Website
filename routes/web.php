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



Route::get('/', 'GetController@index')->name('home');
Route::get('/home', 'HomeController@index');

Route::get('/{category}/{page}', 'GetController@category')->name('category');

Auth::routes();

// Parent routes
Route::group(['middleware' => ['auth', 'parent']], function() {
	// dd('inroutes');
	Route::get('/test', 'GetController@test');

	// choose an application page
	Route::get('/apply', 'GetController@apply')->name('apply'); 
	Route::post('/apply', 'PostController@apply');

	// open/submitted applications
	Route::get('/applications', 'GetController@applications')->name('applications');
	
	// new student application
	Route::get('/applications/new/student/', 'StudentApplicationController@newStudent')
		->name('new.student.application');
	// edit student application
	Route::get('/applications/new/student/{id}', 'StudentApplicationController@editStudent')
		->name('student.application');
	Route::post('/applications/new/student/{id}', 'StudentApplicationController@updateStudent');

	Route::get('/applications/student/information/{id}', 'GetController@informationStudentApplication')->name('information.student.application');
	Route::post('/applications/student/information/{id}', 'StudentApplicationController@updateInformation');

	Route::get('/applications/student/interests/{id}', 'GetController@interestsStudentApplication')
		->name('interests.student.application');
	Route::post('/applications/student/interests/{id}', 'StudentApplicationController@updateInterests');

	Route::get('/applications/student/schools/{id}', 'GetController@schoolsStudentApplication')
		->name('schools.student.application');
	Route::post('/applications/student/schools/{id}', 'StudentApplicationController@updateSchools');

	Route::get('/applications/student/abilities/{id}', 'GetController@abilitiesStudentApplication')
		->name('abilities.student.application');
	Route::post('/applications/student/abilities/{id}', 'StudentApplicationController@updateAbilities');

	Route::get('/applications/student/household/{id}', 'GetController@householdStudentApplication')
		->name('household.student.application');
	Route::post('/applications/student/household/{id}', 'StudentApplicationController@updateHousehold');

	Route::get('/applications/student/siblings/{id}', 'GetController@siblingsStudentApplication')
		->name('siblings.student.application');
	Route::post('/applications/student/siblings/{id}', 'StudentApplicationController@updateSiblings');

	Route::get('/applications/student/parentQuestionair/{id}', 'GetController@parentQuestionairStudentApplication')
		->name('parentQuestionair.student.application');
	Route::post('/applications/student/parentQuestionair/{id}', 'StudentApplicationController@updateParentQuestionair');

	Route::get('/applications/student/studentQuestionair/{id}', 'GetController@studentQuestionairStudentApplication')
		->name('studentQuestionair.student.application');
	Route::post('/applications/student/studentQuestionair/{id}', 'StudentApplicationController@updateStudentQuestionair');

	Route::get('/applications/student/recommendation/{id}', 'GetController@recommendationStudentApplication')
		->name('recommendation.student.application');
	Route::post('/applications/student/recommendation/{id}', 'StudentApplicationController@updateRecommendation');

	Route::get('/applications/student/signature/{id}', 'GetController@signatureStudentApplication')
		->name('signature.student.application');
	Route::post('/applications/student/signature/{id}', 'StudentApplicationController@updateSignature');

	// delete student application
	Route::get('/applications/delete/student/{id}', 'StudentApplicationController@deleteStudent')->name('delete-student');
});


// Super admin routes
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
