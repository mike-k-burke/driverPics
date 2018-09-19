<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    public function loads(){
    	return $this -> hasMany(Load::class);
    }
}
