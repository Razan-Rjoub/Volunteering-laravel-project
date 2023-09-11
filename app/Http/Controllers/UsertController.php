<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsertController extends Controller
{
    public function index()
    {

        $data=User::all();
        return view('dashboardbage.user')->with('data', $data);
    }
    public function create()
    {
        return view('dashboardbage.creatuser');

    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',

            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
            ],
            'phone' => [
                'required',

            ],
            'image' => ['required','regex:/.(jpg|jpeg|png|gif)$/','max:2048'],
        ],['volunteerPhone.regex' => 'The phone  must start with 07 and to be 10number.'
        ,'image.regex' => 'The image  extention must  be jpg or jpeg or png or gif .'
    ],

        );

        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone'=> $request->phone,
            'password' => bcrypt($request->password), // Hash the password
            'image' => $filename,
        ]);

        return redirect('user')->with('flash_message', 'user Added!');
    }


    public function show($id)
    {
        $data=User::find($id);
        return view('dashboardbage.user')->with('data',$data);
    }
    public function edit($id)
    {
        $data=User::find($id);
        return view('dashboardbage.edituser')->with('data',$data);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['phone']= $request->phone;
        $filename = '';

        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
            $data['image'] = $filename;
        } else {
            unset($data['image']);
        }


        User::where(['id' => $id])->update($data);
        return redirect('user')->with('flash_message','admin Update!');
    }






    public function destroy($id)
    {
        User::find($id)->delete();
        User::destroy($id);
    return redirect('user')->with('flash_message','user deleted!');

    }
}
