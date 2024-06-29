<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Card_contentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('card_contents')->insert([
            [
                'img' => 'images/example1.jpg',
                'title' => 'Sample Title 1',
                'text' => 'This is a sample text for item 1.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'images/example2.jpg',
                'title' => 'Sample Title 2',
                'text' => 'This is a sample text for item 2.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'images/example3.jpg',
                'title' => 'Sample Title 3',
                'text' => 'This is a sample text for item 3.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'images/example4.jpg',
                'title' => 'Sample Title 4',
                'text' => 'This is a sample text for item 4.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
