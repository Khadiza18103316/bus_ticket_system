<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeatBookingController extends Controller
{
    public function list(){
        return view('admin.pages.SeatBookig.seatbooking-list');
     }
     
     public function create(){
 
        return view('admin.pages.SeatBooking.seatbooking-create');
     }
}
