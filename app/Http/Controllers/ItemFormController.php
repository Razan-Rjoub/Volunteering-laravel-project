<?php

namespace App\Http\Controllers;

use App\Models\Item_form;
use App\Http\Requests\StoreItem_formRequest;
use App\Http\Requests\UpdateItem_formRequest;

class ItemFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreItem_formRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItem_formRequest $request)
    {
        // $validatedData = $request->validate([
        //     'description' => 'required',
        //     'status' => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);


        // Upload and store the image
        // $image = $request->file('image');
        // $imageName = time() . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('images/products'), $imageName);


        // Create a new product with the image filename
        // Item_form::create([
        //     'user_id' => $userid,
        //     'item_id' => $itemid,
        //     'description' => $request->description,
        //     'status' => $request->status,
        //     'image' => $imageName,
        // ]);

        // return redirect()->route('/')->with(['success' => 'donation successfully
        // ']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item_form  $item_form
     * @return \Illuminate\Http\Response
     */
    public function show(Item_form $item_form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item_form  $item_form
     * @return \Illuminate\Http\Response
     */
    public function edit(Item_form $item_form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItem_formRequest  $request
     * @param  \App\Models\Item_form  $item_form
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItem_formRequest $request, Item_form $item_form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item_form  $item_form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item_form $item_form)
    {
        //
    }
}
