<?php

Route::namespace('OpenITWorks\Tasksmngr\Http\Controllers')->group(function () {
	Route::get('/tasks', 'TasksController@index');
});
