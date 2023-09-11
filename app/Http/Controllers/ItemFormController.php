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
            'volunteerEmail' => 'required',
            'volunteerPhone' => 'required',
            'volunteerAddress' => 'required',
            'description' => 'required',
            'status' => 'required',
            'image' => 'required|max:2048',
        ]);



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

    return redirect()->route('home')->with([
        'success' => 'Donation successfully
    '
    ]);
    }
}
