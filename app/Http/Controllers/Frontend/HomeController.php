<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Bus;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $buses=Bus::all();
        return view('frontend.pages.home',compact('buses'));
    }
}
