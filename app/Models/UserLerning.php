<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLerning extends Model
{
    use HasFactory;

    protected $fillable = [
        'quiz_id',
        'elearning_id',
        'user_id',
        'watch_video',
        'total_round',
        'score',
        'last_score',
        'total_score',
        'certificate'
    ];
}
