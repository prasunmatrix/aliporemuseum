<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Employee extends Authenticatable
{
  use HasFactory;
  protected $table = 'employee';
  protected $fillable = [
    'emp_id',
    'name',
    'password',
    'grade',
    'phone',
    'branch',
    'post',
    'status',
    'is_deleted',
    'deteted_by'
  ];

  public function setPasswordAttribute($value){
    $this->attributes['password'] = bcrypt($value);
  }
}
