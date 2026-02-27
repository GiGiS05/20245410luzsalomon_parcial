<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave_Requests extends Model
{
    /** @use HasFactory<\Database\Factories\LeaveRequestsFactory> */
    use HasFactory;
    protected $fillable = [
        'date_solicited',
        'motive',
        'status',
        'student_id'
    ];
}
