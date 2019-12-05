<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
	protected $fillable = [
        'new_id','user_id','product_id','content'
    ];
     public function news()
    {
    	return $this->belongsToMany('App\New');
    }
     public function users()
    {
    	return $this->belongsToMany('App\User');
    }
}
