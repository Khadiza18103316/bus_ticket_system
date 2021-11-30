<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Passenger;
use Illuminate\Http\Request;

class PassengersController extends Controller
{ 
    public function list(){
      $passengers=Passenger::all();
      // dd($passengers);
   return view('admin.pages.Passengers.passengers-list',compact('passengers'));
}

public function create(){
   return view('admin.pages.Passengers.passengers-create');
}

public function store(Request $request){

   $request->validate([
      'name'=>'required',
      'phone'=>'required|numeric|digits:11',
      'address'=>'required',
      'email'=>'required',
  ]);

  Passenger::create([
     //field name for DB || field name for form

     'name'=>$request->name,
     'number'=>$request->phone,    
     'address'=>$request->address,
     'email'=>$request->email,
  ]);
  return redirect()->back()->with('msg','Passenger created successfully!');
}
}
