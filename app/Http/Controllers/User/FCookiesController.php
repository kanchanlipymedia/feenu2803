<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FCookiesController extends Controller
{
    public function cookies()
    {
     return view('frontend.cookies');
    }
}
