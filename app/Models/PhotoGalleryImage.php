<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoGalleryImage extends Model
{
  use HasFactory;
  protected $table = 'photo_gallery_image';
  protected $fillable = [
    'gallery_category_id',
    'image',
    'title',
    'short_desc',
    'long_desc'

  ];
}
