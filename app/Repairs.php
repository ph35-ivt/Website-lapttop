<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repairs extends Model
{
    protected  $table = "Repairs";
    protected $fillable = [
        'title','content','images','new_nb'
    ];
}
