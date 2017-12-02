<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
	public function all(){
		$user = auth()->guard('api')->user();
		return $user->tasks;
	}

	// public function show(Task $task){
	// 	return $task;
	// }

	public function create(Request $request){
		$user = auth()->guard('api')->user();

		$this->validate($request, [
			'title' => 'required|max:191',
			'checked' => 'required'
		]);

		$task = $user->tasks()->create($request->all());
		return response()->json($task, 201);
	}

	public function update(Request $request, Task $task){
		$task->update($request->all());

		return response()->json($task, 200);
	}

	public function delete(Task $task){
		$task->delete();

		return response()->json(null, 204);
	}
}