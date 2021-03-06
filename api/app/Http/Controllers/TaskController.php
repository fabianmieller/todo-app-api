<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;

class TaskController extends Controller
{
	public function all(){
		$user = auth()->guard('api')->user();
		return $user->tasks;
	}

	public function create(Request $request){
		$user = auth()->guard('api')->user();

		$this->validate($request, [
			'title' => 'required|max:191'
		]);
		$task = $user->tasks()->create([
			'title' => $request->title,
			'checked' => 0
		]);
		return response()->json($task, 201);
	}

	public function update(Request $request, Task $task){
		// $task = Task::findOrFail($task->id);
		$user = auth()->guard('api')->user();
		if($user->id !== $task->user_id){
			throw new AuthenticationException();
		}

		$this->validate($request, [
			'title' => 'required|max:191',
			'checked' => 'required'
		]);
		
		$task->update($request->all());

		return response()->json($task, 200);
	}

	public function delete(Task $task){
		// $task = Task::findOrFail($taskId);
		$user = auth()->guard('api')->user();
		if($user->id !== $task->user_id){
			throw new AuthenticationException();
		}

		$task->delete();

		return response()->json(null, 204);
	}
}