<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    public $table = 'contact_us';
    protected $fillable = [
        'name','email','subject','message','address'
    ];
}
