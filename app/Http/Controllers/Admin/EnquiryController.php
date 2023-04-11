<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use DB;
use Session;


class EnquiryController extends Controller
{
    public function contact(){

        $contacts= Contact::orderBy('id','DESC')->get();
     
        return view('admin.contact',['contacts'=>$contacts]);
    }
  
 
    public function contactDelete($enquiryId, Request $request){

        $enquiry = Contact::where('id',$enquiryId)->first();
        if(empty($enquiry))
            abort(404);

        $enquiry->delete();
        return redirect()->route('admin.contact');

    }

    public function contactDeleteBulk(Request $request){

        $selectedIds = $request->get('selectedIds');
        DB::table('contacts')->whereIn('id', $selectedIds)->delete();
     
        //$request->session()->flash('message', 'Deleted Successfully');
        $response = [
            'status'=>'success',
            'message'=> 'Deleted Successfully'
        ];
        return response()->json($response);
    }
}
