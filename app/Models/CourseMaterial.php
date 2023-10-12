<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseMaterial extends Model
{
    use HasFactory;
    protected $fillable = [
        'elerningcourse_id',
        'video_url',
        'thumbnail',
        'input_type',
        'document',
        'description',
    ];

    public function elerning()
    {
        return $this->belongsTo(ElerningCourse::class, 'elerningcourse_id');
    }
}
