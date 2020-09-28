<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Answer extends Model
{
    use Notifiable;
    protected $fillable = [
        'statement','question_id','user_id',
    ];

    public function question(){
        return $this->belongsTo(\App\Question::class);
    }
    public function user(){
        return $this->belongsTo(\App\User::class);
    }

}
