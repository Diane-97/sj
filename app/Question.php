<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Question extends Model
{
    use Notifiable;
    protected $fillable = [
        'statement','user_id',
    ];



    //Relationship between answer and question tables
    public function answer(){
        return $this->hasMany(\App\Answer::class);
    }
    //relationship between user and question tables
    public function user(){
        return $this->belongsTo(\App\User::class);
    }
}
