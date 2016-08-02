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
                'description' => "This armor doesn't help you much, but at least you'll be comfortable.",
                'level' => 1,
                'damage_min' => 3,
                'damage_max' => 5,
                'weight' => 2,
                'image' => 'weapons/dagger-wood.png',
                'image_height' => 100,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
