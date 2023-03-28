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
}
