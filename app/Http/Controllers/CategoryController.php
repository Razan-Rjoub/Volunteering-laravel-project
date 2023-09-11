<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Donation;
use App\Models\User;
use Auth;

class CategoryController extends Controller
{

    public function inCategory()
    {
        $data= Category::all();

        $donationData = Donation::all();
        $userId = Auth::id();
        $user = User::find($userId);
        return view('Home.index', [
            'category' => $data,
            'donation' => $donationData,
            'user'=>$user,
        ]);
    }

public function aboutus(){
    $userId = Auth::id();
    $user = User::find($userId);
    return view('aboutus.aboutus',compact('user')); 
}
public function contactus(){
    $userId = Auth::id();
    $user = User::find($userId);
    return view('Contact.contactus',compact('user')); 
}
}
