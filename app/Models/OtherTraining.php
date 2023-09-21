<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherTraining extends Model
{
    use HasFactory;

    protected $fillable = [
        'pending_id',
        'other_course',
        'other_date',
    ];

    public function pendingTraining()
    {
        return $this->belongsTo(PendingTraining::class, 'pending_id');
    }
}
