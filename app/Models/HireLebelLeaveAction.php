<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HireLebelLeaveAction extends Model
{
  use HasFactory;
  protected $table = 'hire_lebel_leave_action';
  protected $fillable = [
    'leaveId',
    'emp_id',
    'start_date',
    'end_date',
    'daysCount',
    'leave_type',
    'note',
    'supportingDoc',
    'status',
    'bManagerId',
    'pApprovedBy'
  ];
}
