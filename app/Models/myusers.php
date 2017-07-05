<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authentication;

class myusers extends Authentication
{
	use Notifiable;

	public $table = 'myusers';

	protected $fillable = [
		'name','email','password',
	];

	protected $hidden = [
		'remember_token',
	];
}
