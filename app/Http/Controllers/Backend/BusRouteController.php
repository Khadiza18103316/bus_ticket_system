<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BusRoute;
class BusRouteController extends Controller
{
    public function list(){
       $busroutes=BusRoute::all();
         return view('admin.pages.BusRoute.busroute-list',compact('busroutes'));
      }
      
      public function create(){
  
         return view('admin.pages.BusRoute.busroute-create');
      }
      public function store(Request $request){
         $request->validate([
            'bus_no'=>'required|numeric',
            'bus_type'=>'required',
            'location_from'=>'required',
            'location_to'=>'required',
            'bus_route_time'=>'required',
            'bus_route_date'=>'required|date',
            'bus_departure_from'=>'required',
            'bus_departure_to'=>'required',
        ]);
               //  dd($request);
         BusRoute::create ([
                  // field name for DB || field name for form
                  'bus_no'=>$request->bus_no,
                  'bus_type'=>$request->bus_type,
                  'location_from'=>$request->location_from,
                  'location_to'=>$request->location_to,
                  'bus_route_time'=>$request->bus_route_time,
                  'bus_route_date'=>$request->bus_route_date,
                  'bus_departure_from'=>$request->bus_departure_from,
                  'bus_departure_to'=>$request->bus_departure_to,
      ]);
      return redirect()->back()->with('msg','Bus route created successfully!');

}
}