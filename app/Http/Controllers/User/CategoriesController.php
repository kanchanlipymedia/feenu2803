<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function categories(){

        $categories = Category::orderBy('category_id','DESC')->get();
   
        return view('frontend.Layouts.header',['categories'=>$categories]);
    }
}
