<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Contact as Contact;
use App\Models\Test;


  
class ContactController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('Contact.contactus');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
 

        Contact::create([
            'name' => $request->input('name'),
            'email'=>$request->input('email'),
            'message'=>$request->input('message')
        ]);

  
       
  
        return view('Contact.contactus'); 
    }
}