<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audiofile extends Model
{
  use HasFactory;
  protected $table = 'audiofile';
  protected $fillable = [
    'name',
    'fileName',
    'bengliName',
    'bengaliFile',
    'status',
    'is_deleted',
  ];
}
