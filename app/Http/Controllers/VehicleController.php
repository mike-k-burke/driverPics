<?php

namespace App\Http\Controllers;

use App\Vehicle;
use App\Load;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::paginate(10);
        return view('vehicle.index') -> with(['vehicles' => $vehicles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Load $load)
    {
        return view('vehicle.create') -> with(['load' => $load]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehicle = new Vehicle();
        $vehicle -> VRM = $request -> get('VRM');
        $vehicle -> VIN = $request -> get('VIN');
        $vehicle -> make = $request -> get('make');
        $vehicle -> model = $request -> get('model');
        $vehicle -> colour = $request -> get('colour');
        $vehicle -> load_id = $request -> get('load_id');
        $vehicle -> save();

        $load = Load::whereId($vehicle -> load_id) -> first();
        $drivers = \App\Driver::pluck('name', 'id');

        return redirect('/loads/'.$load['id'].'/edit') -> with(['load' => $load, 'drivers' => $drivers]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        return view('vehicle.edit') -> with(['vehicle' => $vehicle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $vehicle -> VRM = $request -> get('VRM');
        $vehicle -> VIN = $request -> get('VIN');
        $vehicle -> make = $request -> get('make');
        $vehicle -> model = $request -> get('model');
        $vehicle -> colour = $request -> get('colour');
        $vehicle -> load_id = $request -> get('load_id');
        $vehicle -> save();

        return redirect('vehicles') -> with('success', 'The vehicle was updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle -> delete();
        return back() -> with('success', 'The Vehicle has been deleted');
    }
}
