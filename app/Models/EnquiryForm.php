<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnquiryForm extends Model
{
    use HasFactory;

    protected $table = 'enquiry_forms';

    protected $fillable = [
        'student_name',
        'parents_name',
        'guardian__name',
        'gender',
        'date',
        'phone',
        'start_date'
    ];
}
