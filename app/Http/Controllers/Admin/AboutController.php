<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function about(){

        $abouts = About::orderBy('id','DESC')->get();
     
        return view('admin.about',['abouts'=>$abouts]);
    }
    public function addabout(Request $request){

        if ($request->isMethod('post')) {
            $title = $request-> title;
            $Description = $request->Description;
          
            $about = new About();
            $about-> title = $title;
            $about->Description = $Description;
        
            $about->save();
            return redirect()->route('admin.about');
        }
        return view('admin.about_add');
    }
    public function editabout($id, Request $request){

        $about = About::where('id',$id)->first();
        if(empty($about))
            abort(404);         
            
        if ($request->isMethod('post')) 
        {         
            $title = $request-> title;
            $Description = $request-> Description;
            $about -> title = $title;
            $about -> Description = $Description;
            $about->save();
            return redirect()->route('admin.about');
            
        }
        return view('admin.about_add',['about'=>$about]);
    }

    public function deleteabout($id, Request $request){

        $about = About::where('id',$id)->first();
        if(empty($about))
            abort(404);
        
        $about->delete();
        return redirect()->route('admin.about');
        
    }

}
