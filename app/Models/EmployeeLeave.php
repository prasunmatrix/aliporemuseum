<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeLeave extends Model
{
  use HasFactory;
  protected $table = 'employee_leave';
  protected $fillable = [
    'emp_id',
    'casual_leave',
    'sick_leave',
    'privilege_leave',
    'maternity_leave',
    'bereavement_leave',
    'status',
    'is_deleted',
    'deteted_by'
  ];
}
