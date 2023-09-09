<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'total_courses',
        'total_price',
        'customer_banknumber',
        'totalmoney',
        'customer_tel',
        'bankcustomer',
        'bankcompany',
        'payment_slip',
        'user_id',
        'reading',
        'comment',
        'status'
    ];
}
