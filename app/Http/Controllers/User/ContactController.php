<?php
  
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
  
class ContactController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('frontend.contact');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function contact(){

        $contacts= Contact::orderBy('id','DESC')->get();
     
        return view('admin.contact',['contacts'=>$contacts]);
    }
    public function deletelist(Request $request)
    {
        $id = $request->id;
            foreach ($id as $user) 
            {
                Contact::where('id', $user)->delete();
            }
            return redirect();
        
    }
    public function store(Request $request)
    {
        $clientIP = \Request::getClientIp(true);
      

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);
  
        Contact::create($request->all());
  
        return redirect()->back()->with(['success' => 'Thank you for contact us. we will contact you shortly.'],$clientIP);
    }
    public function clientip(){
      
        } 
}