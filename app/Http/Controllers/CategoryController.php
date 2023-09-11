<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $data= Category::all();
        return view('dashboardbage.Categories')->with('data', $data);
    }
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
