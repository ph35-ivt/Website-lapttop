<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'name','category_slug','description','status'
    ];
     public function comments()
    {
    	return $this->hasMany('App\Comments');
    }

}
