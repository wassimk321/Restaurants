<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meal extends Model
{
		protected $guarded =[];
		use HasFactory;
		public function resturants(){
		return $this->belongsToMany('App\Models\resturent');
		}
}
