<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsertController extends Controller
{
    public function index()
    {

        $data=User::all();
        return view('dashboardbage.user')->with('data', $data);
    }

    public function show()
    {

    }


    public function destroy($id)
    {
        User::find($id)->delete();
        User::destroy($id);
    return redirect('user')->with('flash_message','user deleted!');

    }
}
