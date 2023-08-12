<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elerningcourse extends Model
{
    use HasFactory;

    protected $fillable = ['course_name', 'user_name', 'price', 'description'];

    public function quizzes()
    {
        return $this->hasMany(Quiz::class, 'elerningcourse_id');
    }
}
