<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SitedatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('sitedatas')->insert([
            'director_img' => 'director.jpg',
            'why_igsk_img' => 'why_igsk.jpg',
            'goal_img' => 'goal.jpg',
            'student_rules_img' => 'student_rules.jpg',
            'parents_rules_img' => 'parents_rules.jpg',
            'library_img' => 'library.jpg',
            'director_speech' => 'Welcome to IGSK...',
            'why_igsk_text' => 'Why IGSK is the best...',
            'goal' => 'Our goal is to provide...',
            'mission' => 'Our mission is to educate...',
            'vision' => 'Our vision is a world where...',
            'igsk_rules' => 'IGSK Rules are...',
            'students_rules' => 'Students must follow...',
            'parents_rules' => 'Parents must ensure...',
            'libraries_text' => 'Our library offers...',
            'admissin_process' => 'The admission process is...',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
