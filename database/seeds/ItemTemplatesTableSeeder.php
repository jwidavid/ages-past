<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ItemTemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_templates')->insert([
        	[
            	'name' => 'Ankh of Resurrection',				
				'description' => '
                    <b>The grave cannot hold its prey.</b><br>
					When holding this item you will automatically come back to life with 1hp!<br><br>
					This item shatters after one use.',
				'uses' => 1,
				'image' => 'items/ankh.png',
				'image_height' => 50,
				'type' => 'consume',				
				'weight' => 2,
				
				'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			],
            [
                'name' => 'Superior Ankh of Resurrection',                
                'description' => '
                    <b>Up from the dead you arise...</b><br>
                    Not as a zombie, but as a soldier! When holding this Ankh you will automatically 
                    come back to life with 35% of your max health!<br><br>
                    This item shatters after one use.',
                'uses' => 1,
                'image' => 'items/ankh.png',
                'image_height' => 50,
                'type' => 'consume',                
                'weight' => 2,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
			[
            	'name' => 'Vial of Pink Dye',				
				'description' => 'This Vial of Pink Dye has mysterious properties that can change 
					the color of your name!
					<br><br>
					Your name will stay its new color until you use another vial of dye 
					or you run out of Valerian Days!',
				'uses' => 1,
				'image' => 'items/dye_pink.png',
				'image_height' => 64,
				'type' => 'consume',
				'weight' => 1,
				
				'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			],
            [
                'name' => 'Vial of Green Dye',                
                'description' => 'This Vial of Green Dye has mysterious properties that can change 
                    the color of your name!
                    <br><br>
                    Your name will stay its new color until you use another vial of dye 
                    or you run out of Valerian Days!',
                'uses' => 1,
                'image' => 'items/dye_green.png',
                'image_height' => 64,
                'type' => 'consume',
                'weight' => 1,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Vial of Dark Blue Dye',                
                'description' => 'This Vial of Dark Blue Dye has mysterious properties that can change 
                    the color of your name!
                    <br><br>
                    Your name will stay its new color until you use another vial of dye 
                    or you run out of Valerian Days!',
                'uses' => 1,
                'image' => 'items/dye_dneonblue.png',
                'image_height' => 64,
                'type' => 'consume',
                'weight' => 1,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Vial of White Dye',                
                'description' => 'This Vial of White Dye has mysterious properties that can change 
                    the color of your name!
                    <br><br>
                    Your name will stay its new color until you use another vial of dye 
                    or you run out of Valerian Days!',
                'uses' => 1,
                'image' => 'items/dye_white.png',
                'image_height' => 64,
                'type' => 'consume',
                'weight' => 1,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Vial of Magenta Dye',                
                'description' => 'This Vial of Magenta Dye has mysterious properties that can change 
                    the color of your name!
                    <br><br>
                    Your name will stay its new color until you use another vial of dye 
                    or you run out of Valerian Days!',
                'uses' => 1,
                'image' => 'items/dye_magenta.png',
                'image_height' => 64,
                'type' => 'consume',
                'weight' => 1,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Vial of Mint Dye',                
                'description' => 'This Vial of Mint Dye has mysterious properties that can change 
                    the color of your name!
                    <br><br>
                    Your name will stay its new color until you use another vial of dye 
                    or you run out of Valerian Days!',
                'uses' => 1,
                'image' => 'items/dye_green.png',
                'image_height' => 64,
                'type' => 'consume',
                'weight' => 1,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Vial of Orange Dye',                
                'description' => 'This Vial of Orange Dye has mysterious properties that can change 
                    the color of your name!
                    <br><br>
                    Your name will stay its new color until you use another vial of dye 
                    or you run out of Valerian Days!',
                'uses' => 1,
                'image' => 'items/dye_orange.png',
                'image_height' => 64,
                'type' => 'consume',
                'weight' => 1,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
		]);
    }
}
