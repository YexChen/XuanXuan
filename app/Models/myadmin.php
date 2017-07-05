<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authentication;


class myadmin extends Authentication
{
	use Notifiable;
	
    protected $table = 'myadmin'; 

    protected $fillable = ['id','name','password','email'];
}
