<?php

use App\Task;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Check if user is authenticated
Route::group(['middleware' => 'auth:api'], function() {
	// Task Routes
	// Get all tasks
	Route::get('tasks', 'TaskController@all');
	// Get one task
	// Route::get('tasks/{task}', function() {
	// });
	// Create task
	Route::post('tasks', 'TaskController@create');
	// Update task
	Route::put('tasks/{task}', 'TaskController@update');
	// Delete task
	Route::delete('tasks/{task}', function() {
	});

});

// Get User information
Route::get('users', 'UserController@get');

// Auth Routes
// Register user
Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');