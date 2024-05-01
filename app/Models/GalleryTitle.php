<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryTitle extends Model
{
    use HasFactory;
    protected $table = 'gallery_title';

    protected $fillable = [
        'title'
    ];


    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'gallery_title');
    }
}
