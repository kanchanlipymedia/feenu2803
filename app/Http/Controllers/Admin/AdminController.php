<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
   
    public function login(){

        return view('auth.admin-login');
    }
    public function AdminProfile(){
        $adminData = User::first($id);
        return view('admin.admin_profile_view', compact('adminData'));
    }
    public function AdminProfileEdit(){
        $editData = User::find(2);
        
        return view('admin.admin_profile_edit', compact('editData'));
    }
    public function AdminProfileStore(Request $request){
        $data = User::find(2);
       // $data->firstname = $request->firstname;
       // $data->lastname = $request->lastname;
        $data->name = $request->name;
        //$data->about=$request->about;
        $data->email = $request->email;
       // $data->gender = $request->gender;     
        if($request->file('user_image')){
            $file = $request->file('user_image');
            @unlink(public_path('upload/admin_images/' . $data->user_image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['user_image'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Succesfully',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.profile')->with($notification);

    }   // end method
    public function AdminChangePassword(){
        return view('admin.admin_change_password');
    }

    public function AdminUpdatePassword(Request $request){
        
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password'  => 'required|confirmed',
        ]);

        $hashedPassword = User::find(2)->password;
        if(Hash::check($request->oldpassword, $hashedPassword)){
            $admin = User::find(2);
            $admin->password = Hash::make($request->password);
            $admin->save();
          
            return redirect()->route('feenu/login');
        }else{
            return redirect()->back();
        }

    }   // end method

    public function updateUserStatus(Request $request){

        $userId = $request->user_id;
        $status = $request->status;
        $user = User::where('id',$userId)->first();

        $user->status=$status;
        $user->save();

        $response = [
            'status'=>'success',
            'message'=> 'Status Updated Successfully'
        ];
        return response()->json($response);
    }

}
