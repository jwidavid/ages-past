<?php

use Illuminate\Database\Seeder;

class GameSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('game_settings')->insert([
            'donation_total' => 0,
			'donation_required' => 100,
			'donation_event_total' => 0,
			'donation_event_required' => 200,
		]);
    }
}