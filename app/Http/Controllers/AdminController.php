<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Http\Request;
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


    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
            ]
        ]);

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


    // public function update(UpdateAdminRequest $request, $id)
    // {
    //     $data=Admin::find($id);
    //     $input=$request->all();
    //     $data->update($input);
    //      return redirect('admin')->with('flash_message','Admin Updated!');
    // }

 public function adminIndex()
    {
        return view('home');
    }
    //  public function adminIndex(Request $request)
    // {
    //     return view('home');
    //     Admin::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => bcrypt($request->password), 
    //         'image' => $filename,
    //     ]);

    //     return redirect('admin')->with('flash_message', 'Category Added!');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Admin::find($id);
        return view('dashboardbage.show')->with('data',$data);
    }

   
    public function update(Request $request, $id)
    {
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $filename = '';

        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
            $data['image'] = $filename;
        } else {
            unset($data['image']);
        }


        Admin::where(['id' => $id])->update($data);
        return redirect('admin')->with('flash_message','admin Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::find($id)->delete();
        Admin::destroy($id);
    return redirect('admin')->with('flash_message','Admindeleted!');

    }
}