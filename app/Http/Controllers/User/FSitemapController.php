<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FSitemapController extends Controller
{
    public function sitemap()
    {
     return view('frontend.sitemap');
    }
}
