<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodeDiscount extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'discount',
        'used_count',
        'display',
        'date_start',
        'date_expire',
    ];
}
