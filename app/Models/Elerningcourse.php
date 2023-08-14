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

    public function announcements()
    {
        return $this->hasMany(Announcement::class, 'elerningcourse_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'my_courses', 'elerningcourse_id', 'user_id');
    }
}
