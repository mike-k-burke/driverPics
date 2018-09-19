<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	protected $fillable = array('filename', 'vehicle_id');

	public function vehicle(){
		return $this -> belongsTo(Vehicle::class);
	}
}
