<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Task;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskTest extends TestCase
{
		public function testsTasksAreCreatedCorrectly(){
			$user = factory(User::class)->create();
			$token = $user->generateToken();
			$headers = ['Authorization' => "Bearer $token"];
			$payload = [
					'title' => 'Lorem',
			];

			$this->json('POST', '/api/tasks', $payload, $headers)
					->assertStatus(201)
					->assertJson(['title' => 'Lorem']);
		}

		public function testsTasksAreUpdatedCorrectly(){
			$user = factory(User::class)->create();
			$token = $user->generateToken();
			$headers = ['Authorization' => "Bearer $token"];
			$task = factory(Task::class)->create([
					'title' => 'First Task',
					'checked' => 0,
					'user_id' => $user->id
			]);

			$payload = [
					'title' => 'Lorem',
					'checked' => 1,
			];

			$datas = [
				'user' => $user,
				'task' => $task
			];

			file_put_contents('C:\Users\Fabian\Documents\_htdocs\findthatshit.txt', $datas);

			$response = $this->json('PUT', '/api/tasks/' . $task->id, $payload, $headers)
					->assertStatus(200)
					->assertJson([ 
							'title' => 'Lorem'
					]);
		}

		public function testsTasksAreDeletedCorrectly(){
			$user = factory(User::class)->create();
			$token = $user->generateToken();
			$headers = ['Authorization' => "Bearer $token"];
			$task = factory(Task::class)->create([
					'title' => 'First Task',
					'checked' => 0,
					'user_id' => $user->id
			]);

			$this->json('DELETE', '/api/tasks/' . $task->id, [], $headers)
					->assertStatus(204);
		}
}
