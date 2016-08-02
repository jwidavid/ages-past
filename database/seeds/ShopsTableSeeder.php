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
				
				'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			]
		]);
    }
}
