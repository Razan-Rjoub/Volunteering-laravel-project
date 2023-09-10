<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;


use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class ItemController extends Controller
{

    public function indexItem()
    {
        $data= Item::all();
        return view('Item.item',['item'=>$data]);
    }


    public function formItem($id)
    {
        $itemid = Item::find($id);

        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::find($userId);
            return view('Item.itemform', compact('user', 'itemid'));
        }
        return redirect()->route('login');

    }





}
