<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    public $table = 'blogs';

    public $timestamps = true;

    protected $fillable = ['title','content'];

    protected $hidden = ['ID'];

    public function user(){
    	return $this->hasOne('App\Models\myusers','id','author_id');
    }

    public function comment(){
    	return $this->hasMany('App\Models\comments','blogs_id','id');
    }

    public function gettitleAttribute($value)
    {
        return ucfirst($value);
    }

}
