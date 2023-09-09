<?php

namespace App\Http\Controllers;

use App\Models\Item_form;
use App\Http\Requests\StoreItem_formRequest;
use App\Http\Requests\UpdateItem_formRequest;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreItem_formRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);



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
