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

		$testusers = [
			[ 'id' => 1, 'name' => 'Иванов Антон Дмитриевич',  'post' => 'старший инженер',  'email' => 'adivanov@alfabank.ru',    'place' => 'ОО Кемеровский' ],
			[ 'id' => 2, 'name' => 'Ланин Максим Юрьевич',     'post' => 'ведущий инженер',  'email' => 'mlanin@alfabank.ru',      'place' => 'ОО Омский' ],
			[ 'id' => 3, 'name' => 'Осокин Роман Сергеевич',   'post' => 'инженер',          'email' => 'rosokin@alfabank.ru',     'place' => 'ОО Томский' ],
			[ 'id' => 4, 'name' => 'Чунрев Роман Викторович',  'post' => 'инженер',          'email' => 'rchunarev@alfabank.ru',   'place' => 'ОО Челяба' ],
			[ 'id' => 5, 'name' => 'Киприянов Павел Игоревич', 'post' => 'начальник отдела', 'email' => 'pkipriyanov@alfabank.ru', 'place' => 'ОО Кемеровский' ]
		];
		$i = 0;
		foreach ($testusers as $user) {
			User::create([
				'id'       => $user['id'],
				'name'     => $user['name'],
				'email'    => $user['email'],
				'post'     => $user['post'],
				'place'    => $user['place'],
				'password' => Hash::make('Qwer1234')
			]);
			$i++;
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
