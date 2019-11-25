<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class New extends Model
{
    protected $fillable = [
        'title','content','images','new_nb'
    ];
    public function Commments()
    {
    	return $this->hasMany('App\Commment');
    }
}
