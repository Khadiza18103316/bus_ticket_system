<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    public function list(){
      $seats=Seat::all();
         return view('admin.pages.Seat.seat-list',compact('seats'));
      }
      
      public function create(){
         return view('admin.pages.Seat.seat-create');
      }

      public function store(Request $request){

         $request->validate([
            'seat_no'=>'required|numeric',
            'seat_type'=>'required',
            'seat_bus_no'=>'required',
        ]);

      Seat::create([
         //field name for DB || field name for form
    
         'seat_no'=>$request->seat_no,
         'seat_type'=>$request->seat_type,    
         'seat_bus_no'=>$request->seat_bus_no,
      ]);
      return redirect()->back()->with('msg','Seat created successfully!');
}
}
