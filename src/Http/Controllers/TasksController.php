<?php

namespace openitworks\tasksmngr\Http\Controllers;

use App\Http\Controllers\Controller;

class TasksController extends Controller
{
	/**
	 * Show the view.
     *
     * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index(){
		return view('tasks::tasks');
	}
}
