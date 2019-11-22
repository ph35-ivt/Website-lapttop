<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class New extends Model
{
    protected $fillable = [
        'title','description','new_slug','content','images','new_nb'
    ];
}
