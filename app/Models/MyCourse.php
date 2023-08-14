<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyCourse extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'elerningcourse_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function elerningcourse()
    {
        return $this->belongsTo(Elerningcourse::class, 'elerningcourse_id');
    }
}
