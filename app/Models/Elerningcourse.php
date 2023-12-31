<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elerningcourse extends Model
{
    use HasFactory;

    protected $fillable = ['course_name', 
        'user_name',
        'category',
        'price',
        'discount',
        'total_price',
        'description',
        'details',
        'img_course',
        'status_display'
    ];

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

    public function coursematerial()
    {
        return $this->hasMany(CourseMaterial::class, 'elerningcourse_id');
    }
}
