<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinUS extends Model
{
    use HasFactory;
    protected $table = 'join_us';

    protected $fillable = [
        'fast_name',
        'last_name',
        'email',
        'education',
        'carriar_objective',
        'massage',
        'image',
        'pdf'
    ];
}
