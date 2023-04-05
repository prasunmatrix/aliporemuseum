<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeModifyLeave extends Model
{
  use HasFactory;
  protected $table = 'employee_modify_leave';
  protected $fillable = [
    'leave_id',
    'emp_id',
    'leave_type',
    'start_date',
    'end_date',
    'daysCount',
    'note',
    'status'
  ];
}
