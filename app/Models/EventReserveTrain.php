<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventReserveTrain extends Model
{
    use HasFactory;

    protected $fillable = [
        'pending_id',
        'reserve_name',
        'reserve_date',
    ];

    public function trainingcourse()
    {
        return $this->belongsTo(Trainingcourse::class);
    }
    
    
}
