<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [ 'quiz_id','question','choice1','choice2','choice3','choice4','answer','score'];


    public function Quiz()
    {
        return $this->belongsTo(Quiz::class, 'quiz_id');
    }
}


