<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardContent extends Model
{
    use HasFactory;

    protected $table = 'card_contents';
    protected $fillable = [
        'img',
        'title',
        'text',
    ];
}
