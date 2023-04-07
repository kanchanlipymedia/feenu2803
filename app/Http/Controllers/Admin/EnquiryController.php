<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;


class EnquiryController extends Controller
{
    public function contact(){

        $contacts= Contact::orderBy('id','DESC')->get();
     
        return view('admin.contact',['contacts'=>$contacts]);
    }
  
 
    public function removeMulti(Request $request)
    {
        $ids = $request->ids;
        Contact::whereIn('id',explode(",",$ids))->delete();
        return response()->json(['status'=>true,'message'=>"Enquiry successfully removed."]);
         
    }
}
