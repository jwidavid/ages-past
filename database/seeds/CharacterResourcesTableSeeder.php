<?php

use Illuminate\Database\Seeder;

class CharacterResourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('character_resources')->insert([
            [
                'character_id' => 1,                
                'coins' => 50,
            ],
            [
                'character_id' => 2,                
                'coins' => 50,
            ]
        ]);
    }
}
