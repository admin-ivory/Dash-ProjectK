<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return redirect('dashboard');
    }

    public function showBusList(Request $request)
    {
        $bus_info = DB::table('buses')->get();
        return view('laravel-examples/show-bus-list', ['bus_info' => $bus_info]);
    }

    public static function getAvailableSeat($id)
    {
        $bus_info = DB::table('buses')->where('id', $id)->get();
        $total_seat = $bus_info[0]->total_seat;
        $booked_seat = DB::table('booking')->where('bus_id', $id)->count();
        return $total_seat - $booked_seat;
    }

    public function showBusSeatDetail($id)
    {
        $bus_info = DB::table('buses')->where('id', $id)->get();
        //Make array for available seat numbers
        $booking_info = DB::table('booking')->where('bus_id', $id)->where('status', 1)->get();
        
        $busy_seat_array = [];
        if ( count($booking_info) > 0 ) {
            foreach ( $booking_info as $value ) {
                array_push($busy_seat_array, $value->seat_no);
            }
        }
        
        return view('customer.booking-form', ['bus_info' => $bus_info, 'busy_seats' => $busy_seat_array]);
    }

    
}
