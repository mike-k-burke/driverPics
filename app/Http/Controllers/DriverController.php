<?php

namespace App\Http\Controllers;

use App\Driver;

class DriverController extends ResourceController
{
    protected $resource = 'driver';

    public function __construct(Driver $record) {
        parent::__construct($record);
    }
}
