<?php

use Illuminate\Database\Seeder;

class ClanPrivilegesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clan_privileges')->insert(
        	[
            	'name' => 'Funds',
				'description' => 'Give or loan clan funds'
			],
			[
				'name' =>  'Forum Moderator',
				'description' => 'Moderate over the clan forum'
			],
			[
				'name' =>  'Armory',
				'description' => 'Give or lend equipment from the armory'
			],
			[
				'name' =>  'Membership Moderator',
				'description' => 'Kick members and change clan password'
			],
			[
				'name' =>  'Relic',
				'description' => 'Assign relic points and use clan awards'
			],
			[
				'name' =>  'War',
				'description' => 'Access to war menu'
			]
		);
    }
}