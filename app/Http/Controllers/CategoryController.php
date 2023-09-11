<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Donation;

class CategoryController extends Controller
{

    public function inCategory()
    {
        $data= Category::all();
        $donationData = Donation::all();
        return view('Home.index', [
            'category' => $data,
            'donation' => $donationData,
        ]);
    }


}
