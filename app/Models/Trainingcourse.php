<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Module;

class Trainingcourse extends Model
{
    use HasFactory;

    protected $fillable = ['code','name', 'training_detail', 'module_id', 'day', 'fee', 'date'];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function eventReserveTrain()
    {
        return $this->hasOne(EventReserveTrain::class);
    }
}
