<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;

class AdminController extends Controller
{
    public function index()
    {
        $data= Admin::all();
        return view('dashboardbage.Admins')->with('data', $data);
    }


    public function create()
    {
        return view('dashboardbage.createadmin');

    }


    public function store(StoreAdminRequest $request)
    {
         $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
        }

        $input =$request->all();
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'image' => $filename,
        ]);
       return redirect('admin')->with('flash_message','Admin Added!');
    }


    public function edit($id)
    {
        $data=Admin::find($id);
        return view('dashboardbage.editadmin')->with('data',$data);
    }


    public function update(UpdateAdminRequest $request, $id)
    {
        $data=Admin::find($id);
        $input=$request->all();
        $data->update($input);
         return redirect('admin')->with('flash_message','Admin Updated!');
    }


     public function adminIndex()
    {
        return view('home');
    }
}