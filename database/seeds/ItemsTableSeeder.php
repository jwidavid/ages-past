<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
        	[
            	'item_template_id' => 1,				
				'character_id' => 1,
				'uses' => 1,
				
				'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			],
			[
            	'item_template_id' => 2,				
				'character_id' => 1,
				'uses' => 1,
				
				'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			]
		]);
    }
}
