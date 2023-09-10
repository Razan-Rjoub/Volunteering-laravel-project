<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\User;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class adminLoginController extends Controller
{
    public function adminLogin()
    {
        return view('dashboardbage.adminLogin');
    }

     public function adminLoginPost(Request $request)
    {
        $credetails=[
            'email'=> $request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($credetails))
        {
            return redirect('/dash')->with('success','Login Successfully');
        }
        return back()->with('error','Email or Password is invalid');

    }
}
