<?php

use Carbon\Carbon;
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
        DB::table('users')->insert([
        	[
            	'name' => 'Admin',				
				'email' => 'jwidavid72@gmail.com',
				'password' => bcrypt('PA$$word123456'),
				'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			],
			[
            	'name' => 'Tester',				
				'email' => 'test@test.com',
				'password' => bcrypt('Testing123'),
				'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			]
		]);
    }
}
