<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Trip;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');

		$this->command->info('Таблица пользователей заполнена данными!');

		$this->call('TripTableSeeder');

		$this->command->info('Таблица путешествий заполнена данными!');

		// $this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		for ($i=1; $i < 4; $i++) { 
			User::create([
				'id' => $i,
				'name' => 'user'.$i,
				'email' => 'user'.$i.'@mail.ru',
				'password' => Hash::make('Qwer1234')
			]);
		}
	}

}

class TripTableSeeder extends Seeder {

	public function run()
	{
		DB::table('trips')->delete();

		Trip::create([
			'id' => '1',
			'description' => 'first test trip',
			'user_id' => '1',
			'from_location_id' => '5',
			'to_location_id' => '10',
			'departure' => '2015-06-23 04:30:00',
			'arrival' => '2015-06-23 22:00:00',
		]);
		Trip::create([
			'id' => '2',
			'description' => 'second test trip',
			'user_id' => '1',
			'from_location_id' => '5',
			'to_location_id' => '10',
			'departure' => '2015-06-25 14:30:00',
			'arrival' => '2015-06-25 22:00:00',
		]);
		Trip::create([
			'id' => '3',
			'description' => 'third test trip',
			'user_id' => '3',
			'from_location_id' => '15',
			'to_location_id' => '101',
			'departure' => '2015-08-11 11:30:00',
			'arrival' => '2015-08-13 15:00:00',
		]);
	}

}
