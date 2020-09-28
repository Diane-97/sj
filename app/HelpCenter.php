<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class HelpCenter extends Model
{

    use Notifiable;

    protected $fillable = [
        'statement','answer',
    ];
}
