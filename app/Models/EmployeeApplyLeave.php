<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeApplyLeave extends Model
{
  use HasFactory;
  protected $table = 'employee_apply_leave';
  protected $fillable = [
    'emp_id',
    'start_date',
    'end_date',
    'daysCount',
    'leave_type',
    'note',
    'supportingDoc',
    'status',
    'bManagerId',
    'is_deleted',
    'deteted_by'
  ];
}
