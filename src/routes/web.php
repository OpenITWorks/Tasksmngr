<?php

Route::namespace('OpenItWorks\Tasksmngr\Http\Controllers')->group(function () {
	Route::get('/tasks', 'TasksController@index');
});
