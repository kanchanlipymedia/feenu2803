<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class FUsersController extends Controller
{
    public function profile(){

        $users = User::where('user_type',2)->orderBy('id','DESC')->get();
        // dd($categories);
        return view('frontend.profile',['users'=>$users]);
    }
   
    public function editprofile($Id, Request $request)
    {
        $users = User::where('id',$Id)->first();
        if(empty($users))
            abort(404);
            if ($request->isMethod('post')) {
     
        $firstname =$request->firstname;
        $lastname =$request->lastname;
        $name = $request->name;
        $about = $request->about;
        $gender = $request->gender;
        $email = $request->email;
        // $users = User::where('id',$userId)->first();
        // $users->firstname = $firstname;
        // $users->lastname = $lastname;
        // $users->name = $name;
        // $users->about = $about;
        // $users->gender = $gender;
        // $users->email = $email;  
                   
        $users->save();
        //return redirect()->route('frontend.profile');
            }
           
            // return view('frontend.editprofile',['user'=>$users]);
      
    
            
        
    }
    
}
