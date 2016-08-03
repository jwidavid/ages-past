<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class WeaponTemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weapon_templates')->insert([
            [
                'name' => 'Letter Opener',
                'class' => 'dagger',                
                'description' => "If your enemies fear paper cuts, then this should be your weapon of choice.",
                'level' => 1,
                'damage_min' => 3,
                'damage_max' => 5,
                'weight' => 2,
                'image' => 'weapons/dagger-wood.png',
                'image_height' => 100,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Fallen Branch',
                'class' => 'spear',                
                'description' => "This weapon came from the heavens... or maybe it just fell from a common tree.",
                'level' => 1,
                'damage_min' => 5,
                'damage_max' => 6,
                'weight' => 7,
                'image' => 'weapons/staff.png',
                'image_height' => 100,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Sword of Splinters',
                'class' => 'sword',                
                'description' => "The biggest threat that this weapon poses is the splinters that may or may not embed themselves in your enemy.",
                'level' => 1,
                'damage_min' => 4,
                'damage_max' => 7,
                'weight' => 5,
                'image' => 'weapons/sword-wood.png',
                'image_height' => 100,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Spare Twine',
                'class' => 'whip',                
                'description' => "A little twine has so many uses; such as giving someone rope burn.",
                'level' => 1,
                'damage_min' => 4,
                'damage_max' => 6,
                'weight' => 3,
                'image' => 'weapons/whip.png',
                'image_height' => 100,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Practice Bow',
                'class' => 'bow',                
                'description' => "Practice bows, not just for children anymore!",
                'level' => 1,
                'damage_min' => 2,
                'damage_max' => 9,
                'weight' => 3,
                'image' => 'weapons/bow.png',
                'image_height' => 100,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Small Rock',
                'class' => 'claw',                
                'description' => "Holding this rock when you punch your enemy may just hurt you as much as it hurts them.",
                'level' => 1,
                'damage_min' => 4,
                'damage_max' => 6,
                'weight' => 4,
                'image' => 'weapons/claw-rock.png',
                'image_height' => 100,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Wooden Club',
                'class' => 'axe',                
                'description' => "For those who like to smash things.",
                'level' => 1,
                'damage_min' => 5,
                'damage_max' => 8,
                'weight' => 10,
                'image' => 'weapons/club.png',
                'image_height' => 100,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
