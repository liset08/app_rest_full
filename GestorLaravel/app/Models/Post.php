<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	protected $fillable = ['title','body','user_id'];
	public $timestamps = false;
	
 	public function user(){
		  return  $this->belongsTo('App\Models\User');

	}
}
