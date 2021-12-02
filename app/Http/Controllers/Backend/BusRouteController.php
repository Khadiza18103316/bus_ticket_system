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
            'bus_name'=>'required',
            'bus_no'=>'required|numeric',
            'bus_type'=>'required',
            'bus_route_time'=>'required|time',
            'bus_route_date'=>'required|date',
            'bus_departure_from'=>'required',
            'bus_departure_to'=>'required',
        ]);
               //  dd($request);
         BusRoute::create ([
                  // field name for DB || field name for form
                  'bus_name'=>$request->bus_name,
                  'bus_no'=>$request->bus_no,
                  'bus_type'=>$request->bus_type,
                  'bus_route_time'=>$request->bus_route_time,
                  'bus_route_date'=>$request->bus_route_date,
                  'bus_departure_from'=>$request->bus_departure_from,
                  'bus_departure_to'=>$request->bus_departure_to,
      ]);
}
}