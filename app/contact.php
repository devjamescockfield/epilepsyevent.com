<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    public $table = 'contact';

    public $fillable = ['firstname', 'lastname','email','message'];
}
