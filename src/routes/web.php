<?php

Route::namespace('openitworks\tasksmngr\Http\Controllers')->group(function () {
	Route::get('/tasks', 'TasksController@index');
});
