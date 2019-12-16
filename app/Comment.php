<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

	protected $fillable = [
        'cm_name','cm_email','product_id','content'
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
