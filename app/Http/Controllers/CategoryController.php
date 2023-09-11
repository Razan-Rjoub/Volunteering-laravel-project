<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Donation;

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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardbage.createcategory');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */

     public function store(StoreCategoryRequest $request)
     {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
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

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $filename,
        ]);

        return redirect('category')->with('flash_message', 'Category Added!');
     }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Category::find($id);
        return view('dashboardbage.editcategory')->with('data',$data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
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
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    Category::destroy($id);
    return redirect('category')->with('flash_message','Category deleted!');

    }
}
