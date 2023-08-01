<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Module;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['code','name', 'module_id', 'day', 'fee', 'date'];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
