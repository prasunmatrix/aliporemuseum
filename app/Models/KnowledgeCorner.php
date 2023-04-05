<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KnowledgeCorner extends Model
{
  use HasFactory;
  protected $table = 'knowledge_corner';
  protected $fillable = [
    'name',
    'file',
    'status',
    'created_by',
  ];
}
