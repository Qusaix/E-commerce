<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\categores;
use App\ads;
use App\Featured;
use App\Countdown;
use DB;
class HomeController extends Controller
{
    public function index()
    {
        $categores = categores::get();
        $featured = Featured::where('featured',1)->get();
        $onSale = Featured::where('new_price',"!=",null)->get();
        $countdowns = Countdown::get();
        $ads = ads::find(1);
        $slider = DB::table('posts')->take(3)->get();
        // dd($slider);

 

        return view('index',compact(
        'categores',
        'ads',
        'featured',
        'onSale',
        'countdowns',
         "slider"
    ));
    }
}
