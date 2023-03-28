<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function categories(){

        $categories = Category::orderBy('category_id','DESC')->get();
        // dd($categories);
        return view('admin.categories',['categories'=>$categories]);
    }
    

    public function addCategory(Request $request){

        if ($request->isMethod('post')) {
            $name = $request->name;
            $slug = strtolower($name);
            $category = new Category();
            $category->name = $name;
            $category->slug = $slug;
            $category->save();
            return redirect()->route('admin.categories');
        }
        return view('admin.categories_add');
    }

    public function editCategory($categoryId, Request $request){

        $category = Category::where('category_id',$categoryId)->first();
        if(empty($category))
            abort(404);

        if ($request->isMethod('post')) {
            $name = $request->name;
            $slug = strtolower($name);
            $category->name = $name;
            $category->slug = $slug;
            $category->save();
            return redirect()->route('admin.categories');
        }
        return view('admin.categories_add',['category'=>$category]);
    }

    public function deleteCategory($categoryId, Request $request){

        $category = Category::where('category_id',$categoryId)->first();
        if(empty($category))
            abort(404);
        
        $category->delete();
        return redirect()->route('admin.categories');
        
    }
}
