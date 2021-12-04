<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resturent extends Model
{
	protected $guarded =[];
    use HasFactory;

    public function category(){
        return $this->belongsTo('App\Models\category');
    }
    public function meals(){
        return $this->hasMany('App\Models\meal');
    }
}
