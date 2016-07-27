<?php

use Illuminate\Database\Seeder;

class ElementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('elements')->insert(
	        [
            	'name' => 'fire',
			],
			[
            	'name' => 'water',
			],
			[
            	'name' => 'earth',
			],
			[
            	'name' => 'lightning',
			],
			[
            	'name' => 'wind',
			]        	
		);
    }
}