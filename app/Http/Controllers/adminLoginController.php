<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\User;

use DB;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

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
        $admin = DB::table('admins')
    ->where('email', $credetails['email'])
    ->first();
        // dd($admin);
        if ($admin) {
    // Admin record found, you can compare the password here
    if ( $credetails['password']== $admin->password) {
          session()->put('loginname', $admin->name);
        
        // Retrieve the admin's name from the session (optional)
        $name = session('loginname');
       
return redirect('/dash')->with('success','Login Successfully');
    } else {
        return back()->with('error', 'Email or Password is invalid');
    }
} else {
    return back()->with('error', 'Email or Password is invalid');
}
    }

     public function adminLogout()
    {session()->forget('loginname');
      
        return redirect()->route('adminLogin');
    }
}
