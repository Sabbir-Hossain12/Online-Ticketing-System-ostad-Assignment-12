<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\seatAllocation;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;

class homeController extends Controller
{
    function viewBusSeat()
    {
       return view('pages.busSeatPlan');
    }

    function seat(Request $request)
    {

        return $request->input('seat','nothing');
    }


    function sample()
    {
        return Location::get();
    }

//   redirect create trip form
    function showTripForm()
    {
       $locations= Location::get();
        return view('pages.createTrip')->with('locations',$locations);
    }
 function storeTrip(Request $request)
      {
      $trips=  Trip::create(
            [
                'date'=> $request->input('date'),
                'from'=> $request->input('from'),
                'to'=>$request->input('to')
            ]
        );

      return redirect()->route('trip.form')->with('trips',$trips);
      }

      function showTrip()
      {
           $trips= Trip::get();
            return view('pages.tripList')->with('trips',$trips);
      }
}
