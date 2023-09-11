<?php

namespace App\Http\Controllers;

use App\Models\Item_form;
use App\Http\Requests\StoreItem_formRequest;
use App\Http\Requests\UpdateItem_formRequest;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class ItemFormController extends Controller
{

    public function stoItem(Request $request)
    {
        $validatedData = $request->validate([
            'volunteerName' => 'required',
            'volunteerEmail' => ['required','email', 'ends_with:.com'],
            'volunteerPhone' => ['required', 'regex:/^07[789]\d{7}$/'],
            'volunteerAddress' => 'required',
            'description' => 'required',
            'status' => 'required',
            'image' => ['required','regex:/\.(jpg|jpeg|png|gif)$/','max:2048'],
        ],['volunteerPhone.regex' => 'The phone  must start with 07 and to be 10number.'
        ,'image.regex' => 'The image  extention must  be jpg or jpeg or png or gif .'
            ]
        );




    if (Auth::check()) {
        $userId = Auth::id();
    }

     Item_form::create([
        'user_id' =>$userId,
        'item_id'=>$request->item_id,
        'volunteerName' => $request->volunteerName,
        'volunteerEmail' => $request->volunteerEmail,
        'volunteerPhone' => $request->volunteerPhone,
        'volunteerAddress' => $request->volunteerAddress,
        'description' => $request->description,
        'status' => $request->status,
        'image' => $request->image,

    ]);

    return redirect()->route('paysuccess')->with([
        'success' => 'Donation successfully
    '
    ]);



    }


}
