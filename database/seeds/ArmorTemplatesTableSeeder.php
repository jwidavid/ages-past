<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ArmorTemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('armor_templates')->insert([
            [
                'name' => 'Cloth Armor',                
                'description' => "This armor doesn't help you much, but at least you'll be comfortable.",
                'level' => 1,
                'defense' => 1,
                'weight' => 10,
                'image' => 'armors/cloth.png',
                'image_height' => 100,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
