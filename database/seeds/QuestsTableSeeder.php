<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class QuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quests')->insert([
        	[
	        	'name' => 'Lost Journal',
            	'description' => 'The Merchant shop owner lost his journal...',				
				'body' => 
					'The Merchant shop owner lost his journal somewhere in the forest.
					If you happen upon it, please bring return it to him immediately.',
				'difficulty' => 2,
				'icon' => '',
				'reward' => '100',
				'currency' => 'platinum',
				
				'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			],
			[
	        	'name' => 'Bring Me Their Heads',
            	'description' => 'Goblins have infested the mine...',				
				'body' => 
					'Goblins have infested the mine in Mensk. The Mine Shop owner wants
					you to kill 10 goblins then bring their heads to him as proof. For
					some strange reason he insists that the heads be completely intact.',
				'difficulty' => 1,
				'icon' => '',
				'reward' => '2000',
				'currency' => 'coins',
				
				'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			]
		]);
    }
}
