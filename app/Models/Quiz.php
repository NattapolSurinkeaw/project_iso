<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = ['quiz_name','elerningcourse_id','quiz_type'];

    public function elerningcourse()
    {
        return $this->belongsTo(ElerningCourse::class, 'elerningcourse_id');
    }

    public function question()
    {
        return $this->hasMany(Question::class, 'quiz_id');
    }
}
