<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Image
 * @package App
 * @mixin Model|Builder
 *
 * @property int id
 * @property int vehicle_id
 * @property string filename
 *
 * @property Vehicle vehicle
 */
class Image extends Model
{
	protected $fillable = [
	    'vehicle_id',
        'filename'
    ];

	public function vehicle(){
		return $this->belongsTo(Vehicle::class);
	}
}
