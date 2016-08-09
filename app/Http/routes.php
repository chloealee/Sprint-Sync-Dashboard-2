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

	if (App::environment('remote'))
	{
		URL::forceSchema('https');
	};

	Route::get('/', function () {
	    return view('welcome');
	});

	// Provide controller methods with object instead of ID
	Route::model('tasks', 'Task');
	Route::model('teams', 'Team');

	// Use slugs rather than IDs in URLs
	Route::bind('tasks', function($value, $route) {
		return App\Task::whereSlug($value)->first();
	});
	Route::bind('teams', function($value, $route) {
		return App\Team::whereSlug($value)->first();
	});

	Route::resource('teams', 'TeamsController');
	Route::resource('teams.tasks', 'TasksController');
