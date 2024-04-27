<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortInfo extends Model
{
    use HasFactory;

    protected $table = 'short_infos';

    protected $fillable = [
        'image',
        'title',
        'sub_title',
        'details'
    ];
}
