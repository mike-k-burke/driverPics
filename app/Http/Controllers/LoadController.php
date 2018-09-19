<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Load;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class LoadController extends ResourceController
{
    protected $resource = 'load';

    public function __construct(Load $record) {
        parent::__construct($record);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        $drivers = Driver::pluck('name', 'id');
        return view($this->resource . '.create')->with(compact('drivers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return Response
     */
    public function edit($id)
    {
        $record = $this->model->find($id);
        $drivers = Driver::pluck('name', 'id');
        return view($this->resource . '.edit')->with(compact('record', 'drivers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $record = $this->model->create($request->all());
        Session::put('load', $record);
        return redirect(route('vehicle.create'));
    }

    /**
     * Add a load to a session for when adding a vehicle to that load.
     *
     * @param $id
     * @return RedirectResponse
     */
    public function add($id)
    {
        $record = $this->model->find($id);
        Session::put('load', $record);
        return redirect(route('vehicle.create'));
    }
}
