<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchMaster extends Model
{
  use HasFactory;
  protected $table = 'branchmaster';
  protected $fillable = [
    'branchName',
    'empId',
    'is_manager',
    'branchHead',
    'email'
  ];
}
