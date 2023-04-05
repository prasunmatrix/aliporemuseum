<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
  use HasFactory;
  protected $table = 'notice';
  protected $fillable = [
    'name',
    'file',
    'status',
    'created_by',
    'is_deleted',
    'deleted_by',
  ];
}
