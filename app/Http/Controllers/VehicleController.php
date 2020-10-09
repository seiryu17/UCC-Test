<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index(){

        $vehicle = Vehicle::all();

        return response()->json($vehicle);
    }

    public function create(Request $request){

        $this->validate($request,[
            'name' => 'required|string',
            'engine_displacement' => 'required',
            'engine_power' => 'required',
            'price' => 'required|integer',
            'location' => 'required|string',
        ]);

        $data = $request->all();
        $vehicle = Vehicle::create($data);

        return response()->json($vehicle);
    }
}
