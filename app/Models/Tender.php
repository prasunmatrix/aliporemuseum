<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
  use HasFactory;
  protected $table = 'tender';
  protected $fillable = [
    'tender_no',
    'tender_subject',
    'tender_type',
    'tender_date',
    'last_date_of_application',
    'tender_notice',
    'related_notification',
    'status',
    'created_by',
  ];
}
