<?php

use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
	public function run()
	{
		User::create([
			'username' => 'System',
			'password' => Hash::make('secret'),
			'Rpassword' => this->'password',
			'email' => 'damaros1100@alumno.ipn.mx',
			'FechaNac' => '1993-10-18'
		]);
	}
}