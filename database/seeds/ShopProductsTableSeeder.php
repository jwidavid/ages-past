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
        	// Merchant Products
            [
            	'shop_id' => 1,
                'weapon_template_id' => null,
                'armor_template_id' => null,
            	'item_template_id' => 1,		
				'cost' => 20000,
				'currency' => 'coins',
			],
			[
            	'shop_id' => 1,
                'weapon_template_id' => null,
                'armor_template_id' => null,
            	'item_template_id' => 2,		
				'cost' => 150000,
				'currency' => 'coins',
			],
            [
                'shop_id' => 1,
                'weapon_template_id' => null,
                'armor_template_id' => null,
                'item_template_id' => 3,        
                'cost' => 6,
                'currency' => 'tickets',
            ],
            [
                'shop_id' => 1,
                'weapon_template_id' => null,
                'armor_template_id' => null,
                'item_template_id' => 4,        
                'cost' => 6,
                'currency' => 'tickets',
            ],
            [
                'shop_id' => 1,
                'weapon_template_id' => null,
                'armor_template_id' => null,
                'item_template_id' => 5,        
                'cost' => 6,
                'currency' => 'tickets',
            ],
            [
                'shop_id' => 1,
                'weapon_template_id' => null,
                'armor_template_id' => null,
                'item_template_id' => 6,        
                'cost' => 6,
                'currency' => 'tickets',
            ],
            [
                'shop_id' => 1,
                'weapon_template_id' => null,
                'armor_template_id' => null,
                'item_template_id' => 7,        
                'cost' => 6,
                'currency' => 'tickets',
            ],
            [
                'shop_id' => 1,
                'weapon_template_id' => null,
                'armor_template_id' => null,
                'item_template_id' => 8,        
                'cost' => 6,
                'currency' => 'tickets',
            ],
            [
                'shop_id' => 1,
                'weapon_template_id' => null,
                'armor_template_id' => null,
                'item_template_id' => 9,        
                'cost' => 6,
                'currency' => 'tickets',
            ],

            // Blacksmith Weapons
			[
            	'shop_id' => 2,
                'weapon_template_id' => 1,
            	'armor_template_id' => null,
                'item_template_id' => null,		
				'cost' => 552,
				'currency' => 'coins',
			],
            [
                'shop_id' => 2,
                'weapon_template_id' => 2,
                'armor_template_id' => null,
                'item_template_id' => null,        
                'cost' => 1041,
                'currency' => 'coins',
            ],
            [
                'shop_id' => 2,
                'weapon_template_id' => 3,
                'armor_template_id' => null,
                'item_template_id' => null,        
                'cost' => 1042,
                'currency' => 'coins',
            ],
            [
                'shop_id' => 2,
                'weapon_template_id' => 4,
                'armor_template_id' => null,
                'item_template_id' => null,        
                'cost' => 1132,
                'currency' => 'coins',
            ],
            [
                'shop_id' => 2,
                'weapon_template_id' => 5,
                'armor_template_id' => null,
                'item_template_id' => null,        
                'cost' => 1274,
                'currency' => 'coins',
            ],
            [
                'shop_id' => 2,
                'weapon_template_id' => 6,
                'armor_template_id' => null,
                'item_template_id' => null,        
                'cost' => 1300,
                'currency' => 'coins',
            ],
            [
                'shop_id' => 2,
                'weapon_template_id' => 7,
                'armor_template_id' => null,
                'item_template_id' => null,        
                'cost' => 1532,
                'currency' => 'coins',
            ],
            
            // Blacksmith Armor
            [
                'shop_id' => 2,
                'weapon_template_id' => null,
                'armor_template_id' => 1,
                'item_template_id' => null,        
                'cost' => 1300,
                'currency' => 'coins',
            ]
		]);
    }
}
