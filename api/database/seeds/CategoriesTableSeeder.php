<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Remove all existing records
		Category::truncate();

		$faker = \Faker\Factory::create();

		// Create Tasks
		for ($i=0; $i < 30; $i++) { 
			Category::create([
				'name' => $faker->word
			]);
		}
	}
}
