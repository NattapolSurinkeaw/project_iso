<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annoucement extends Model
{
    use HasFactory;

    protected $fillable = ['elerningcourse_id', 'content'];

    public function elerning()
    {
        return $this->belongsTo(ElerningCourse::class, 'elerningcourse_id');
    }
}
