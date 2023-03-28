<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Privacy;

class PrivacyController extends Controller
{
    public function privacy(){

        $privacys = Privacy::orderBy('id','DESC')->get();
     
        return view('admin.privacy',['privacys'=>$privacys]);
    }
    public function addprivacy(Request $request){

        if ($request->isMethod('post')) {
            $title = $request-> title;
            $Description = $request->Description;
          
            $privacy = new Privacy();
            $privacy-> title = $title;
            $privacy->Description = $Description;
        
            $privacy->save();
            return redirect()->route('admin.privacy');
        }
        return view('/admin.privacy_add');
    }
    public function editprivacy($id, Request $request){

        $privacy = Privacy::where('id',$id)->first();
        if(empty($privacy))
            abort(404);         
            
        if ($request->isMethod('post')) 
        {         
            $title = $request-> title;
            $Description = $request-> Description;
            $privacy -> title = $title;
            $privacy -> Description = $Description;
            $privacy->save();
            return redirect()->route('admin.privacy');
            
        }
        return view('admin.privacy_add',['privacy'=>$privacy]);
    }

    public function deleteprivacy($id, Request $request){

        $privacy = Privacy::where('id',$id)->first();
        if(empty($privacy))
            abort(404);
        
        $privacy->delete();
        return redirect()->route('admin.privacy');
        
    }
}
