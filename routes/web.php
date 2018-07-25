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
	Route::get('/applications/new/student/', 'Applications\Student\StudentController@newStudent')->name('new.student.application');
	Route::get('/applications/new/student/{id}', 'Applications\Student\StudentController@editStudent')
		->name('student.application');
	// edit student application
		Route::group(['middleware' => ['studentApplication']], function() {
			
			Route::post('/applications/new/student/{id}', 'Applications\Student\StudentController@updateStudent');
		});
	

	Route::get('/applications/student/information/{id}', 'Applications\Student\InformationController@informationStudentApplication')->name('information.student.application');
	Route::post('/applications/student/information/{id}', 'Applications\Student\InformationController@updateInformation');
	Route::post('/applications/student/information/{id}/delete/file', 'Applications\Student\InformationController@deleteFile');

	Route::get('/applications/student/interests/{id}', 'Applications\Student\InterestsController@interestsStudentApplication')
		->name('interests.student.application');
	Route::post('/applications/student/interests/{id}', 'Applications\Student\InterestsController@updateInterests');

	Route::get('/applications/student/schools/{id}', 'Applications\Student\SchoolsController@schoolsStudentApplication')
		->name('schools.student.application');
	Route::post('/applications/student/schools/{id}', 'Applications\Student\SchoolsController@updateSchools');

	Route::get('/applications/student/abilities/{id}', 'Applications\Student\AbilitiesController@abilitiesStudentApplication')
		->name('abilities.student.application');
	Route::post('/applications/student/abilities/{id}', 'Applications\Student\AbilitiesController@updateAbilities');

	Route::get('/applications/student/household/{id}', 'Applications\Student\HouseholdController@householdStudentApplication')
		->name('household.student.application');
	Route::post('/applications/student/household/{id}', 'Applications\Student\HouseholdController@updateHousehold');

	Route::get('/applications/student/siblings/{id}', 'Applications\Student\SiblingsController@siblingsStudentApplication')
		->name('siblings.student.application');
	Route::post('/applications/student/siblings/{id}', 'Applications\Student\SiblingsController@updateSiblings');

	Route::get('/applications/student/parentQuestionair/{id}', 'Applications\Student\ParentQuestionairController@parentQuestionairStudentApplication')
		->name('parentQuestionair.student.application');
	Route::post('/applications/student/parentQuestionair/{id}', 'Applications\Student\ParentQuestionairController@updateParentQuestionair');

	Route::get('/applications/student/studentQuestionair/{id}', 'Applications\Student\StudentQuestionairController@studentQuestionairStudentApplication')
		->name('studentQuestionair.student.application');
	Route::post('/applications/student/studentQuestionair/{id}', 'Applications\Student\StudentQuestionairController@updateStudentQuestionair');

	Route::get('/applications/student/recommendation/{id}', 'Applications\Student\RecommendationController@recommendationStudentApplication')
		->name('recommendation.student.application');
	Route::post('/applications/student/recommendation/{id}', 'Applications\Student\RecommendationController@updateRecommendation');

	Route::get('/applications/student/signature/{id}', 'Applications\Student\SignatureController@signatureStudentApplication')
		->name('signature.student.application');
	Route::post('/applications/student/signature/{id}', 'Applications\Student\SignatureController@updateSignature');

	// delete student application
	Route::get('/applications/delete/student/{id}', 'Applications\Student\StudentController@deleteStudent')->name('delete-student');
	Route::post('/delete/file', 'FileController@deleteFile');
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

Route::get('/{category}/{page}', 'GetController@category')->name('category');

// Route::get('/creator/page', 'PageController@Creator')->name('page-creator');
// Route::post('/creator/page', 'PageController@Create');
