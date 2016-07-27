<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
        	[
            	'user_id' => 1,				
				'name' => 'Dunamis',
				'gender' => 0,
				'element_id' => 0,
				
				'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			],
			[
            	'user_id' => 2,				
				'name' => 'Fearow',
				'gender' => 0,
				'element_id' => 2,
				
				'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			]
		]);
    }
}
