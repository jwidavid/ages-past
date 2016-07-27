<?php

use Illuminate\Database\Seeder;

class GameRanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('game_ranks')->insert(
        	[
            	'name' => 'admin',
				'description' => '',
			],
			[
				'name' =>  'moderator',
				'description' => '',
			],
			[
				'name' =>  'member',
				'description' => '',
			],
			[
				'name' =>  'guard',
				'description' => ''
			]
		);
    }
}