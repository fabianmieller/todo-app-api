<?php

use App\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Remove all existing records
		Task::truncate();

		$faker = \Faker\Factory::create();

		$userIds = DB::table('users')->pluck('id')->toArray();

		// Create Tasks
		for ($i=0; $i < 30; $i++) { 
			Task::create([
				'title' => $faker->sentence,
				'checked' => $faker->boolean,
				'user_id' => $faker->randomElement($userIds)
			]);
		}
	}
}
