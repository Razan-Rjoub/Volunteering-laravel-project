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


    public function create()
    {
        return view('dashboardbage.createcategory');

    }


    public function store(StoreCategoryRequest $request)
    {

        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
        }
        
        $input =$request->all();
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $filename,
        ]);
       return redirect('category')->with('flash_message','Category Added!');
    }


    public function show(Category $donation)
    {
        //
    }


    public function edit($id)
    {
        $data=Category::find($id);
        return view('dashboardbage.editcategory')->with('data',$data);
    }


    public function update(UpdateCategoryRequest $request, $id)
    {
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        
        $filename = '';

        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
            $data['image'] = $filename;
        } else {
            unset($data['image']);
        }


        Category::where(['id' => $id])->update($data);
        return redirect('category')->with('flash_message','Category Update!');
        
    }


   public function destroy($id)
    {

    Category::destroy($id);
    return redirect('category')->with('flash_message','Category deleted!');

    }
}
