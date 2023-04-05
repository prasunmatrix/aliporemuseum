<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  use HasFactory;
  protected $table = 'location';
  protected $fillable = [
    'name',
    'nameBengali',
    'latitude',
    'longitude',
    'type',
    'is_favourite',
    'status',
    'is_deleted',
  ];
}
