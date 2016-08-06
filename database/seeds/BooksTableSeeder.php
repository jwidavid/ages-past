<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'Beastiary Vol.I',
                'category' => 'research',
                'description' => 'A catalog of common monsters.',
                'body' => '',
                'is_active' => 1,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),                
            ],
            [
                'title' => 'Bestiarum Vocabulum',
                'category' => 'research',
                'description' => 'This tome is a catalog of ancient monsters common and rare.',
                'body' => '',
                'is_active' => 0,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),                
            ],
            [
                'title' => 'Economics 101',
                'category' => 'research',
                'description' => 'Economy for Dummies',
                'body' => '',
                'is_active' => 1,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),                
            ],
            [
                'title' => 'Economics 201',
                'category' => 'research',
                'description' => 'A study of economic practices and behaviors.',
                'body' => '',
                'is_active' => 0,
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),                
            ]
        ]);
    }
}
