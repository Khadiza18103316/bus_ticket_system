<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Bus;
use App\Models\Trip;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home()
   {
       $buses=Bus::all();
       return view('frontend.pages.home',compact('buses'));
   }
   public function reserveForm(){
       return view('frontend.pages.reserve-form');
   }

   public function showTrip()
   {
       $trips = Trip::all();
       return view('frontend.pages.show-trips', compact('trips'));
   }
}