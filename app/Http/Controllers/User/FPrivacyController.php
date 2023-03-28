<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Privacy;

class FPrivacyController extends Controller
{
    public function privacy()
    {   
    $privacys = Privacy::orderBy('id','DESC')->get();     
    return view('frontend.privacy',['privacy'=>$privacys]);
    }
   
}
