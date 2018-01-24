<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Task;

class TasksController extends Controller
{
    public function index() {
    	$tasks = Task::all();
    	
    	return view('tasks.index',compact('tasks'));
  	}
  	// $id expected from {task} wildcard in view path i.e. function show($id) 
  	public function show($id){
  		$task = Task::find($id);
    	
    	return view('tasks.show',compact('task'));
  	}
}
