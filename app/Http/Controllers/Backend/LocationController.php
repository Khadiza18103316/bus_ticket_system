<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function list(){
      $locations=Location::all();
      //   dd($locations);
        return view('admin.pages.Location.location-list',compact('locations'));
     }
     
     public function create(){
 
        return view('admin.pages.Location.location-create');
     }
     public function store(Request $request){
      $request->validate([
         'location_from'=>'required',
         'location_to'=>'required',
      ]);
   
   Location::create ([
               // field name for DB || field name for form
               'location_from'=>$request->location_from,
               'location_to'=>$request->location_to,
   ]);
   return redirect()->back()->with('msg','Location created successfully!');

}
}