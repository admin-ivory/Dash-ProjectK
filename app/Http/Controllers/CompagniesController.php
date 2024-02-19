<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\Compagnies;
use App\Models\Chauffeurs;


class CompagniesController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function compagniesList()
    {
        $compagnie = Compagnies::all();
 
        return view('laravel-examples/compagnies/show-compagnies-list',['compagnie'=>$compagnie]);
    }
    
    public function showAddCompagniesForm()
    {
    	return view('laravel-examples/compagnies/add-compagnies-form');
    }

    public function store(Request $request)
    {

        $attributes = request()->validate([
            'name' => ['required', 'max:50'],
            'plate_number' => ['max:50'],
            'marque' => ['max:70'],
            'capacity'    => ['max:150'],
        ]); 
        
        Compagnies::where('compagnie')
        ->update([
            'name'    => $attributes['name'],
            'Plate_number' => $attribute['plate_number'],
            'phone'     => $attributes['phone'],
            'marque' => $attributes['marque'],
            'capacity'    => $attributes["capacity"],
        ]);


        return redirect('show-bus-list')->with('success','Profile updated successfully');
    }



  
   

}
