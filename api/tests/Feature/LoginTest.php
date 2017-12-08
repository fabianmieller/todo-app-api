<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
	public function testRequiresEmailAndLogin(){
		$this->json('POST', 'api/login')
				->assertStatus(422)
				->assertJson([
					'errors' => [
						'email' => ["E-Mail-Adresse muss ausgefüllt sein."],
						'password' => ["Passwort muss ausgefüllt sein."],
					]
				]);
	}

	public function testUserLoginsSuccessfully(){
		$user = factory(User::class)->create([
			'email' => 'testlogin@user.com',
			'password' => bcrypt('toptal123'),
		]);

		$payload = ['email' => 'testlogin@user.com', 'password' => 'toptal123'];

		$this->json('POST', 'api/login', $payload)
			->assertStatus(200)
			->assertJsonStructure([
				'data' => [
					'id',
					'name',
					'email',
					'created_at',
					'updated_at',
					'api_token',
				],
			]);

	}

}
