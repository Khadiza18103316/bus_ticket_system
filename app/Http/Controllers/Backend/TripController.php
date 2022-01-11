<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function list(){
        $trips=Trip::with('location');
        // dd($trips);
        return view('admin.pages.Trip.trip-list',compact('trips'));
    }
    public function create(){
        $locations=Location::all();
        return view('admin.pages.Trip.trip-create',compact('locations'));
    }

    public function store(Request $request){
        $request->validate([
           'location_from'=>'required',
           'location_to'=>'required',
           'bus_no'=>'required|numeric',
           'bus_fare'=>'required|numeric',
        ]);
     
     Trip::create ([
                 // field name for DB || field name for form
                 'location_from'=>$request->location_from,
                 'location_to'=>$request->location_to,
                 'bus_no'=>$request->bus_no,
                 'fare'=>$request->bus_fare,
     ]);
     return redirect()->route('admin.trip')->with('msg','Trip created successfully!');
  }
}