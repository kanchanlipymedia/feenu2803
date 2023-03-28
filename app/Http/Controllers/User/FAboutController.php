<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class FAboutController extends Controller
{
   public function about()
   {   
   $abouts = About::orderBy('id','DESC')->get();     
   return view('frontend.about',['about'=>$abouts]);
   }
}
