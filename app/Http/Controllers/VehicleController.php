<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends ResourceController
{
    protected $resource = 'vehicle';

    public function __construct(Vehicle $record) {
        parent::__construct($record);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $records = $this->model->paginate(10);
        return view($this->resource . '.index')->with(compact('records'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        /** @var Vehicle $record */
        $record = $this->model->create($request->all());
        return redirect(route('load.edit', [$record->vehicle_load]));
    }
}
