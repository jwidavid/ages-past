<?php

use Illuminate\Database\Seeder;

class SpecializationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specializations')->insert(
        	[
            	'type' => 'medical',				
				'level' => 1,
				'name' => 'Cheap Refill',
				'description' => 'Reduces the cost to fill your potion jug',
			],
			[
            	'type' => 'medical',				
				'level' => 2,
				'name' => 'Jug Regeneration',
				'description' => 'Automatically refills your jug 120 points per hour',
			],
			[
            	'type' => 'medical',				
				'level' => 3,
				'name' => 'Drugged Up',
				'description' => 'Gives a chance to regain 15% of your max HP in combat',
			],
			[
            	'type' => 'medical',				
				'level' => 4,
				'name' => 'Rename Armor',
				'description' => 'Make your armor famous by renaming it',
			],
			[
            	'type' => 'blackhand',				
				'level' => 1,
				'name' => 'Pickpocket',
				'description' => 'Chance to steal 2x coins from your opponent in battle',
			],
			[
            	'type' => 'blackhand',				
				'level' => 2,
				'name' => 'Thief Guild',
				'description' => 'Gain access to the Thieves Guild',
			],
			[
            	'type' => 'blackhand',				
				'level' => 3,
				'name' => 'Decapitation',
				'description' => 'Chance to kill an enemy who has less than 10% HP left',
			],
			[
            	'type' => 'blackhand',				
				'level' => 4,
				'name' => 'Shroud',
				'description' => 'Increase dodge chance by 5%',
			],
			[
            	'type' => 'blacksmith',				
				'level' => 1,
				'name' => 'Improve Items',
				'description' => 'Improve damage and defense of equipment',
			],
			[
            	'type' => 'blacksmith',				
				'level' => 2,
				'name' => 'Refine Items',
				'description' => 'Refine weapons/armors into silver or bronze',
			],
			[
            	'type' => 'blacksmith',				
				'level' => 3,
				'name' => 'Slotting Items',
				'description' => 'Allows you to create a slot in weapons/armors',
			],
			[
            	'type' => 'blacksmith',				
				'level' => 4,
				'name' => 'Rename Weapon',
				'description' => 'Make your weapon famous by renaming it',
			],
			[
            	'type' => 'wilderness',				
				'level' => 1,
				'name' => 'Efficient Travel',
				'description' => '25% chance that moving in the forest wont cost any energy',
			],
			[
            	'type' => 'wilderness',				
				'level' => 2,
				'name' => 'Alertness',
				'description' => 'Lets you see whats in the area around you',
			],
			[
            	'type' => 'wilderness',				
				'level' => 3,
				'name' => 'Scavenger',
				'description' => 'Increases chance of finding items',
			],
			[
            	'type' => 'wilderness',				
				'level' => 4,
				'name' => 'Fortitude',
				'description' => 'Decreases displacement from dying by half',
			]
		);
    }
}