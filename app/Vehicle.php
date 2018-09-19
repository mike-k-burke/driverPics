<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Class Vehicle
 * @package App
 * @mixin Model|Builder
 *
 * @property int id
 * @property int load_id
 * @property string VRM
 * @property string VIN
 * @property string make
 * @property string model
 * @property string color
 *
 * @property Image[]|Collection images
 * @property Load vehicle_load
 */
class Vehicle extends Model
{
	protected $fillable = [
	    'load_id',
        'VRM',
        'VIN',
        'make',
        'model',
        'colour'
    ];

    public function vehicle_load(){
    	return $this->belongsTo(Load::class, 'load_id', 'id');
    }

    public function images(){
    	return $this->hasMany(Image::class);
    }
}
