<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert(
        	[
            	'name' => 'HP Boost',				
				'level' => 1,
				'description' => '+30 HP gained per Level',
			],
			[
            	'name' => 'HP Master',
				'level' => 2,
				'description' => '+75 HP gained per Level',
			],
			[
            	'name' => 'Neo\s Master',
				'level' => 3,
				'description' => '+100 HP and +10 Max Energy gained per Level',
			],
			[
            	'name' => 'Gargoyle',
				'level' => 1,
				'description' => '+3 Defense gained per Level',
			],
			[
            	'name' => 'Defensive Screen',
				'level' => 2,
				'description' => '+8 Defense gained per Level',
			],
			[
            	'name' => 'Dragoon',
				'level' => 3,
				'description' => '+15 Defense gained per Level',
			],
			[
            	'name' => 'Resistance',
				'level' => 1,
				'description' => '+1 Every Elemental Shield gained per Level',
			],
			[
            	'name' => 'Fire Master',
				'level' => 2,
				'description' => '+1 Fire Damage gained per Level',
			],
			[
            	'name' => 'Water Master',
				'level' => 2,
				'description' => '+1 Water Damage gained per Level',
			],
			[
            	'name' => 'Earth Master',
				'level' => 2,
				'description' => '+1 Earth Damage gained per Level',
			],
			[
            	'name' => 'Lightning Master',
				'level' => 2,
				'description' => '+1 Lightning Damage gained per Level',
			],
			[
            	'name' => 'Wind Master',
				'level' => 2,
				'description' => '+1 Wind Damage gained per Level',
			],
			[
            	'name' => 'Elemental Mastery',
				'level' => 3,
				'description' => '+2 Every Elemental Shield gained per Level',
			],
			[
            	'name' => 'Strength Boost',
				'level' => 1,
				'description' => '+2 Strength gained per Level',
			],
			[
            	'name' => 'Strength Knowledge',
				'level' => 2,
				'description' => '+5 Strength gained per Level',
			],
			[
            	'name' => 'Endurance Boost',
				'level' => 1,
				'description' => '+2 Endurance gained per Level',
			],
			[
            	'name' => 'Endurance Knowledge',
				'level' => 2,
				'description' => '+5 Endurance gained per Level',
			],
			[
            	'name' => 'Agility Boost',
				'level' => 1,
				'description' => '+2 Agility gained per Level',
			],
			[
            	'name' => 'Agility Knowledge',
				'level' => 2,
				'description' => '+5 Agility gained per Level',
			],
			[
            	'name' => 'Perception Boost',
				'level' => 1,
				'description' => '+2 Perception gained per Level',
			],
        	[
            	'name' => 'Perception Knowledge',
				'level' => 2,
				'description' => '+5 Perception gained per Level',
			],
			[
            	'name' => 'Warlord',
				'level' => 3,
				'description' => '+10 Strength, Endurance, Agility, Perception, and Max Energy gained per Level',
			],
			[
            	'name' => 'Final Knowledge',
				'level' => 1,
				'description' => '+5% Experience gained per Level',
			],
			[
            	'name' => 'Element Knowledge',
				'level' => 2,
				'description' => '+2% Elemental Experience gained per Level',
			],
			[
            	'name' => 'Last Knowledge',
				'level' => 3,
				'description' => '+2% Experience and +1% Elemental Experience gained per Level',
			],
			[
            	'name' => 'Acceleration',
				'level' => 1,
				'description' => '+1 Attack Speed (AS) gained per Level',
			],
			[
            	'name' => 'Speed Master',
				'level' => 2,
				'description' => '+2 Attack Speed (AS) gained per Level',
			],
			[
            	'name' => 'Critical Supremacy',
				'level' => 3,
				'description' => '+1% Critical Hit Chance gained per Level',
			],
			[
            	'name' => 'Wrath',
				'level' => 1,
				'description' => '2% Damage Reduction gained per Level',
			],
			[
            	'name' => 'Incarnation',
				'level' => 2,
				'description' => '5% Damage Reduction gained per Level',
			],
			[
            	'name' => 'Jessie\s Love',
				'level' => 3,
				'description' => '+250 HP gained per Level',
			]
		);
    }
}