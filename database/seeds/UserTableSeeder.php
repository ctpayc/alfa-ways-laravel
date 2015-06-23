<?php

use DB;
use App\User;

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		User::create([
			'id' => '2',
			'name' => 'user2'.
			'email' => 'user2@mail.ru',
			'password' => Hash::make('Qwer1234')
		]);
	}

}