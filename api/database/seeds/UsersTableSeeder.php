<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// clear User table
		User::truncate();

		$faker = \Faker\Factory::create();

		// generate Hash for password
		
		$password = Hash::make('allthesame');

		User::create([
			'name' => 'Administrator',
			'email' => 'admin@test.de',
			'password' => $password
		]);

		for ($i=0; $i < 10; $i++) { 
			User::create([
				'name' => $faker->name,
				'email' => $faker->email,
				'password' => $password
			]);
		}
	}
}
