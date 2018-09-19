<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Load
 * @package App
 * @mixin Model|Builder
 *
 * @property int id
 * @property int driver_id
 * @property string pickup_postcode
 * @property string dropoff_postcode
 *
 * @property Driver driver
 * @property Vehicle[]|Collection vehicles
 */
class Load extends Model
{
	protected $fillable = [
	    'pickup_postcode',
        'dropoff_postcode',
        'driver_id'
    ];

    public function driver(){
    	return $this->belongsTo(Driver::class);
    }

    public function vehicles(){
    	return $this->hasMany(Vehicle::class);
    }
}
