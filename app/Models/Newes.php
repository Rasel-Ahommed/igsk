<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newes extends Model
{
    use HasFactory;
    protected $table = 'news';

    protected $fillable = [
        'image',
        'title',
        'sub_title',
        'event_date',
    ];
}
