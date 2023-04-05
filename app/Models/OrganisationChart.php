<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganisationChart extends Model
{
  use HasFactory;
  protected $table = 'organisation_chart';
  protected $fillable = [
    'image',
    'status',
    'created_by',
  ];
}


