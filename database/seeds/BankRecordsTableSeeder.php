<?php

use Illuminate\Database\Seeder;

class BankRecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bank_records')->insert([
            [
                'character_id' => 1,                
            ],
            [
                'character_id' => 2,
            ]
        ]);
    }
}
