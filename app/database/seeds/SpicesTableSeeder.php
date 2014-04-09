<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SpicesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			$spice = Spice::create([
				'upc' => $faker->randomNumber(13),
				'name' => $faker->word,
				'manufacturer' => $faker->word,
			]);

			$user = User::find($faker->randomNumber(1,10));
			$user->spices()->attach($spice, array('expiration' => $faker->dateTimeThisDecade(), 'amount' => $faker->randomNumber(0, 100)));
		}
	}

}