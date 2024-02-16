<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;


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
 
        return view('laravel-examples/show-bus-list',['bus'=>$bus]);
    }
    public function trajetList()
    {
        $bus = Voyages::all();
 
        return view('laravel-examples/show-compagnies-list',['bus'=>$voyage]);
    }
    public function driversList()
    {
        $bus = Chauffeurs::all();
 
        return view('laravel-examples/show-drivers-list',['bus'=>$driver]);
    }
    public function garesList()
    {
        $bus = Gares::all();
 
        return view('laravel-examples/show-compagnies-list',['bus'=>$compagnie]);
    }
    
}
