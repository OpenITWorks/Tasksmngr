<?php

Route::namespace('openitworks\Tasksmngr\Http\Controllers')->group(function () {
	Route::get('/tasks', 'TasksController@index');
});
