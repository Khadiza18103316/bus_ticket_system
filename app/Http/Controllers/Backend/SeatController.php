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
            'bus_type'=>'required',
            'bus_no'=>'required',
        ]);

      Seat::create([
         //field name for DB || field name for form
    
         'seat_id'=>$request->seat_id,
         'bus_type'=>$request->bus_type,    
         'bus_no'=>$request->bus_no,
      ]);
      return redirect()->back()->with('msg','Seat created successfully!');
}

public function seatEdit($id){
   // dd($id);
   $seat = Seat::find($id);
   // dd($product);
   $seats = Seat::all();
   if ($seat) {
       return view('admin.pages.Seat.seat-edit',compact('seat','seats'));
   }
}

public function seatUpdate(Request $request,$id){
   // dd($request->all());
   // dd($id);
   $seat = Seat::find($id);
   // dd($seat);
   if ($seat) {
       $seat->update([
       'seat_id'=>$request->seat_id,
         'bus_type'=>$request->bus_type,    
         'bus_no'=>$request->bus_no,
       ]);

       return redirect()->route('admin.seat')->with('msg','Seat updated!');
   }
}
public function seatDetails($id){
   $seat=Seat::find($id);
   return view ('admin.pages.Seat.seat-details',compact('seat'));
 }

public function seatDelete($id){

Seat::find($id)->delete();

return redirect()->back()->with('success','Seat Deleted.');
}

}