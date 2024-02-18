<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\Compagnies;


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
    public function compagniesList()
    {
        $compagnie = Compagnies::all();
 
        return view('laravel-examples/compagnies/show-compagnies-list',['compagnie'=>$compagnie]);
    }
    public function driversList()
    {
        $driver = Chauffeurs::all();
 
        return view('laravel-examples/drivers/show-drivers-list',['driver'=>$driver]);
    }

}
