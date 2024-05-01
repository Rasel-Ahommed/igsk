<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentProcess extends Model
{
    use HasFactory;

    
    protected $table = 'assessment_processes';

    protected $fillable = [
        'class_name',
        'title',
        'details'
    ];
}
