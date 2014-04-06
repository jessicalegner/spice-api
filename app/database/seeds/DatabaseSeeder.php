<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Spice::truncate();
		
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
		$this->call('SpicesTableSeeder');
		
	}

}