<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'galleries';

    protected $fillable = [
        'gallery_title',
        'image',
    ];

    public function galleryTitle()
    {
        return $this->belongsTo(GalleryTitle::class, 'gallery_title');
    }
}
