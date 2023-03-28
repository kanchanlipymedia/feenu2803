<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FDmcaController extends Controller
{
    public function dmca()
   {
    return view('frontend.dmca');
   }
}
