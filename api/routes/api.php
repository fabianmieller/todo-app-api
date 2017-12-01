<?php

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
	// Article Routes
	Route::get('articles', function() {
			// Get all articles
	});
	Route::get('articles/{id}', function() {
			// Get article by id
	});
	Route::post('articles', function() {
			//
	});
	Route::put('articles/{id}', function() {
			// Update article by id
	});
	Route::delete('articles/{id}', function() {
			// Delete article by id
	});
});

// Auth Routes
Route::post('register', function() {
		// Register user
});

Route::post('login', function() {
		// Login user
});

Route::post('logout', function() {
		// Logout user
});