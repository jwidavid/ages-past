<?php

use Illuminate\Database\Seeder;

class ElementsSkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('elements_skills')->insert(
        	[
            	'name' => 'Fire',
				'element' => 'fire',
				'level' => 1,
				'description' => '+2 Fire Damage'
			],
			[
            	'name' => 'Flame',
				'element' => 'fire',
				'level' => 2,
				'description' => '+2 Fire Damage, +2 Strength'
			],
			[
            	'name' => 'Inferno',
				'element' => 'fire',
				'level' => 3,
				'description' => '-2 Strength, -2 Endurance to Opponent'
			],
			[
            	'name' => 'Gates of Hell',
				'element' => 'fire',
				'level' => 4,
				'description' => '+5 to Strength Permanently'
			],
			[
            	'name' => 'Dark Nova',
				'element' => 'fire',
				'level' => 5,
				'description' => '+12 Fire Damage'
			],
			[
            	'name' => 'Ice',
				'element' => 'water',
				'level' => 1,
				'description' => '+2 Permanently to Agility per point'
			],
			[
            	'name' => 'Flood',
				'element' => 'water',
				'level' => 2,
				'description' => '+3 to Water Shield'
			],
			[
            	'name' => 'Snowstorm',
				'element' => 'water',
				'level' => 3,
				'description' => '-3 Decrease to Opponent Endurance'
			],
			[
            	'name' => 'Rain',
				'element' => 'water',
				'level' => 4,
				'description' => '+9 Water Elemental Damage'
			],
			[
            	'name' => 'Destiny',
				'element' => 'water',
				'level' => 5,
				'description' => 'Increases Total Max HP by +50'
			],
			[
            	'name' => 'Quake',
				'element' => 'earth',
				'level' => 1,
				'description' => '+3 to Defense'
			],
			[
            	'name' => 'Dust',
				'element' => 'earth',
				'level' => 2,
				'description' => '+3 Earth Damage'
			],
			[
            	'name' => 'Quicksand',
				'element' => 'earth',
				'level' => 3,
				'description' => 'Decreases Opponent Attack Speed by 1'
			],
			[
            	'name' => 'Eclipse',
				'element' => 'earth',
				'level' => 4,
				'description' => 'Increases Defense by 7'
			],
			[
            	'name' => 'Rage',
				'element' => 'earth',
				'level' => 5,
				'description' => 'Increases Weapon Damage by (7-7)'
			],
			[
            	'name' => 'Thunder',
				'element' => 'lightning',
				'level' => 1,
				'description' => '+1 Lightning Damage, +1 Lightning Shield'
			],
			[
            	'name' => 'Concentrate',
				'element' => 'lightning',
				'level' => 2,
				'description' => '+1 Strength, +1 Accuracy, +1 Endurance'
			],
			[
            	'name' => 'Explosion',
				'element' => 'lightning',
				'level' => 3,
				'description' => '+3 Lightning Damage'
			],
			[
            	'name' => 'Shockwave',
				'element' => 'lightning',
				'level' => 4,
				'description' => '+3 Lightning Damage, +6 Lightning Shield'
			],
			[
            	'name' => 'Northern Cross',
				'element' => 'lightning',
				'level' => 5,
				'description' => '+5 Strength, +5 Accuracy, +5 Endurance'
			],
        	[
            	'name' => 'Wind',
				'element' => 'wind',
				'level' => 1,
				'description' => '+1 Wind Damage, +1 Wind Shield'
			],
			[
            	'name' => 'Tornado',
				'element' => 'wind',
				'level' => 2,
				'description' => '+0.5 ASpeed'
			],
			[
            	'name' => 'Typhoon',
				'element' => 'wind',
				'level' => 3,
				'description' => '-3 to Enemy Accuracy'
			],
			[
            	'name' => 'Gust',
				'element' => 'wind',
				'level' => 4,
				'description' => '+5 Wind Damage'
			],
			[
            	'name' => 'Legend',
				'element' => 'wind',
				'level' => 5,
				'description' => '+2 ASpeed'
			]
		);
    }
}