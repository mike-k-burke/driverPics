<?php

namespace App\Http\Controllers;

use App\Load;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoadController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('load.index') -> with(['loads' => Load::all()]);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $drivers = \App\Driver::pluck('name', 'id');
        return view('load.create') -> with(['drivers' => $drivers]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $load = new Load;
        $load -> pickup_postcode = $request -> get('pickup_postcode');
        $load -> dropoff_postcode = $request -> get('dropoff_postcode');
        $load -> driver_id = $request -> get('driver_id');
        $load -> save();

        Session::put('load', $load);

        return redirect("/vehicles/create");
    }
    
    public function add(Request $request, $id)
    {
        $load = Load::whereId($id)->first();

        Session::put('load', $load);

        return redirect("/vehicles/create");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Load  $load
     * @return \Illuminate\Http\Response
     */
    public function show(Load $load)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Load  $load
     * @return \Illuminate\Http\Response
     */
    public function edit(Load $load)
    {
        $drivers = \App\Driver::pluck('name', 'id');
        return view('load.edit') -> with(['load' => $load, 'drivers' => $drivers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Load  $load
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Load $load)
    {
        $load -> pickup_postcode = $request -> get('pickup_postcode');
        $load -> dropoff_postcode = $request -> get('dropoff_postcode');
        $load -> driver_id = $request -> get('driver_id');
        $load -> save();
        return redirect('loads') -> with('success', 'The Load has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Load  $load
     * @return \Illuminate\Http\Response
     */
    public function destroy(Load $load)
    {
        $load -> delete();
        return redirect('loads') -> with('success', 'The Load has been deleted');
    }
}
