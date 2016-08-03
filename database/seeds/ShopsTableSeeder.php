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
                'layout' => 'single',
				
				'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			],
			[
            	'name' => 'Blacksmith',
            	'welcome_message' => 'Greetings, come in and look around, I have what you need!',
                'layout' => 'multi',
				
				'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			],
            [
                'name' => 'Alchemist',
                'welcome_message' => 'Welcome to my alchemy shop young warrior.<br>Look around and see if you find anything interesting.',
                'layout' => 'single',
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
		]);
    }
}
