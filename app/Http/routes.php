<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('admin/review-applications/{year?}', [
	'as' => 'review.application',
	'uses' => 'AdminView@viewAllApplications'
]);

Route::get('admin/application-details/id={app_id}', 'AdminView@viewApplicationDetails');

Route::get('admin/application-details/getfile/id={app_id}&file={file}', [
	'as' => 'fetch.file',
	'uses' => 'AdminView@getFileController']);

Route::post('admin/approve', 'AdminView@approveApplication');

Route::post('admin/delete', 'AdminView@deleteApplication');

Route::post('admin/reject', 'AdminView@rejectApplication');

Route::get('register', 'StudentRegistration@registerPageOne');

Route::post('submit/1', 'StudentRegistration@submitPageOne');

Route::get('register/2', 'StudentRegistration@registerPageTwo');

Route::post('submit/2', 'StudentRegistration@submitPageTwo');

Route::get('register/3', 'StudentRegistration@registerPageThree');

Route::post('submit/3', 'StudentRegistration@submitPageThree');

Route::get('success', 'StudentRegistration@successPage');

Route::get('error', 'StudentRegistration@errorPage');