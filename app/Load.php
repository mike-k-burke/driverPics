<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Load extends Model
{

	protected $fillable = array('pickup_postcode', 'dropoff_postcode', 'driver_id');

    public function driver(){
    	return $this -> belongsTo(Driver::class);
    }

    public function vehicles(){
    	return $this -> hasMany(Vehicle::class);
    }
}
