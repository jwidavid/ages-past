<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ShopProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shop_products')->insert([
        	[
            	'shop_id' => 1,
            	'item_template_id' => 1,		
				'cost' => 1000,
				'currency' => 'coins',
			],
			[
            	'shop_id' => 1,
            	'item_template_id' => 2,		
				'cost' => 2000,
				'currency' => 'coins',
			],
			[
            	'shop_id' => 2,
            	'armor_template_id' => 1,		
				'cost' => 552,
				'currency' => 'coins',
			],
			[
            	'shop_id' => 2,
            	'weapon_template_id' => 1,		
				'cost' => 1300,
				'currency' => 'coins',
			]
		]);
    }
}
