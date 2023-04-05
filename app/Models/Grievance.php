<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grievance extends Model
{
  use HasFactory;
  protected $table = 'grievance';
  protected $fillable = [
    'complain_id',
    'fullname',
    'phone',
    'email',
    'branch',
    'messages',
    'attachment'
  ];
}
