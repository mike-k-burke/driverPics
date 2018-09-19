<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Class Driver
 * @package App
 * @mixin Model|Builder
 *
 * @property int id
 * @property string name
 *
 * @property Load[]|Collection loads
 */
class Driver extends Model
{
    protected $fillable = [
        'name'
    ];
    public function loads(){
    	return $this->hasMany(Load::class);
    }
}
