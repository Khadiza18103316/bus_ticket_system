<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function list(){
        $drivers=Driver::all();
      //   dd($drivers);
     return view('admin.pages.Driver.driver-list',compact('drivers'));
  }
  
  public function create(){
     return view('admin.pages.Driver.driver-create');
  }
  public function store(Request $request){

   $request->validate([
      'name'=>'required',
      'id'=>'required|numeric',
      'phone'=>'required|numeric|digits:11',
      'bus_name'=>'required',
      'bus_number'=>'required',
  ]);
   Driver::create ([
            // field name for DB || field name for form
            'driver_name'=>$request->name,
            'driver_id'=>$request->id,
            'driver_phone_number'=>$request->phone,
            'bus_name'=>$request->bus_name,
            'bus_number'=>$request->bus_number,
]);
return redirect()->back()->with('msg','Passenger created successfully!');
}
}
