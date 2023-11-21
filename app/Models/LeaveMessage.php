<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname_lname',
        'phone_number',
        'organiz',
        'email',
        'leave_message'
    ];
}
