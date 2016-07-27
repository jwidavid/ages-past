<?php

use Illuminate\Database\Seeder;

class DonationPacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('donation_packs')->insert(
        	[
            	'button_id' => 'GQ5J8J9WL6W5A',
				'name' => 'Curious',
				'cost' => 5,
				'valerian' => 14,
				'tickets' => 6
			],
			[
				'button_id' => '68LD9NKGBH6C2',
				'name' => 'Interested',
				'cost' => 10,
				'valerian' => 30,
				'tickets' => 15
			],
			[
				'button_id' => 'UE77S39QKBFXN',
				'name' => 'Hopeful',
				'cost' => 20,
				'valerian' => 60,
				'tickets' => 35
			],
			[
				'button_id' => 'JGSXP5V2VKGRC',
				'name' => 'Dedicated',
				'cost' => 35,
				'valerian' => 150,
				'tickets' => 70
			],
			[
				'button_id' => 'AC5MUPY66DLVU',
				'name' => 'Zealot',
				'cost' => 50,
				'valerian' => 356,
				'tickets' => 180
			],
			[
				'button_id' => 'Z5PGCVZGCZT7U',
				'name' => 'V-Pack',
				'cost' => 35,
				'valerian' => 225,
				'tickets' => 0
			]
		);
    }
}