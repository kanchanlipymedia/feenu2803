<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FPolicyController extends Controller
{
    public function policy()
    {
     return view('frontend.policy');
    }
}
