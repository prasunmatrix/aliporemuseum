<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
  use HasFactory;
  protected $table = 'branch_details';
  protected $fillable = [
    'district',
    'block',
    'gram_panchayat',
    'name_of_the_bank',
    'name_of_the_branch',
    'ifsc_code',
    'branch_code',
    'latitude',
    'longitude',
    'status',
    'atm_id',
    'atm_available',
    'created_by',
    'is_deleted',
    'deteted_by'
  ];
}
