<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function list(){
      $buses=Bus::all();
      //   dd($buses);
       return view('admin.pages.Bus.bus-list',compact('buses'));
    }
    
    public function create(){

       return view('admin.pages.Bus.bus-create');
    }
    public function store(Request $request){
      // dd(date('Ymdhms'));
      // dd($request->all());
      $filename = '';
      if($request->hasFile('image')){
        $file = $request->file('image');
        $filename = date('Ymdhms').'.'.$file->getclientOriginalExtension();
        $file->storeAs('/uploads',$filename);
      }

      
      $request->validate([
        'bus_name'=>'required',
        'bus_no'=>'required|numeric',
        'bus_type'=>'required',
      ]);
      // dd('ok');
      Bus::create ([
      // field name for DB || field name for form
      'bus_name'=>$request->bus_name,
      'bus_no'=>$request->bus_no,
      'bus_type'=>$request->bus_type,
      'image'=>$filename
]);
return redirect()->back()->with('msg','Bus created successfully!');
}
    public function busView($bus_id){
    $bus=Bus::find($bus_id);
    return view ('admin.pages.Bus.bus-details',compact('bus'));
  }

public function busDelete($bus_id){

Bus::find($bus_id)->delete();

return redirect()->back()->with('success','Bus Deleted.');
}
}