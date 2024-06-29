<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteData extends Model
{
    use HasFactory;

    protected $table = 'sitedatas';
    protected $fillable =[
        'director_img',
        'why_igsk_img',
        'goal_img',
        'student_rules_img',
        'parents_rules_img',
        'library_img',
        'director_speech',
        'why_igsk_text',
        'goal',
        'mission',
        'vision',
        'igsk_rules',
        'students_rules',
        'parents_rules',
        'libraries_text',
        'admissin_process'
    ];
}
