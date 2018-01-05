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

Route::get('/',     'PagesController@basicInformation');
Route::post('/',     'PagesController@basicInformationCreate');


/** VI to VII **/

Route::get(
	'/extra-academic-activities', 
	'PagesController@getExtraAcademicActivities'
)->name('get.extra-academic-activities');

/** End VI to VII **/
