<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function users(){

        $users = User::where('user_type',2)->orderBy('id','DESC')->get();
        // dd($categories);
        return view('admin.users',['users'=>$users]);
    }

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
