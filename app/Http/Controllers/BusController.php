<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\Compagnies;
use App\Models\Chauffeurs;


class BusController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function busList()
    {
        $bus = Bus::all();
 
        return view('laravel-examples/bus/show-bus-list',['bus'=>$bus]);
    }
    
    public function showAddBusForm()
    {
    	return view('laravel-examples/bus/add-bus-form');
    }

    public function store(Request $request)
    {

        $attributes = request()->validate([
            'name' => ['required', 'max:50'],
            'plate_number' => ['max:50'],
            'marque' => ['max:70'],
            'capacity'    => ['max:150'],
        ]); 
        
        Bus::where('buses')
        ->update([
            'name'    => $attributes['name'],
            'plate_number' => $attribute['plate_number'],
            'marque'     => $attributes['marque'],
            'capacity' => $attributes['capacity'],
           
        ]);


        return redirect('show-bus-list')->with('success','Autocars updated successfully');
    }



    public function compagniesList()
    {
        $compagnie = Compagnies::all();
 
        return view('laravel-examples/compagnies/show-compagnies-list',['compagnie'=>$compagnie]);
    }
    public function driversList()
    {
        $driver = Chauffeurs::all();
 
        return view('laravel-examples/chauffeurs/show-drivers-list',['driver'=>$driver]);
    }


}
