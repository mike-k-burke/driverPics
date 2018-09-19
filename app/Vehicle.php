<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{

	protected $fillable = array('VRM', 'load_id');

    public function loadd(){
    	return $this -> belongsTo(Load::class, 'load_id', 'id');
    }

    public function images(){
    	return $this -> hasMany(Image::class);
    }
}
