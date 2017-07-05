<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
   public $table = 'comments';
   
   public $timestamps = "ture";

   protected $fillable = ['parent_id','inherit_id','blogs_id','content','updated_at','created_at'];

   protected $guarded = ['id'];

   public function commenter(){
        return $this->hasOne('App\Models\myusers','id','user_id');
    }
}
