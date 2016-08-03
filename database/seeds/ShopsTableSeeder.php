<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
        	[
            	'name' => 'Merchant',
            	'welcome_message' => 'Welcome to my shop, take your time.',
				
				'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			],
			[
            	'name' => 'Blacksmith',
            	'welcome_message' => 'Ah, come in and look around, I have what you need!',
				
				'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			]
		]);
    }
}
