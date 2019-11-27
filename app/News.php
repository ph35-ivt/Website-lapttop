<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	 protected  $table = "News";
    protected $fillable = [
        'title','content','images','new_nb'
    ];
    public function Commments()
    {
    	return $this->hasMany('App\Commment');
    }
}
