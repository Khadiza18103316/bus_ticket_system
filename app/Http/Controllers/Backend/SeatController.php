<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    public function list(){
         return view('admin.pages.Seat.seat-list');
      }
      
      public function create(){
  
         return view('admin.pages.Seat.seat-create');
      }
}
