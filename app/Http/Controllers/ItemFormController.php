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

        $data= Item_form::all();
        return view('dashboardbage.DonatedItemsForm')->with('data', $data);
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
        //
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
    public function destroy($id)
    {

        Item_form::find($id)->delete();
        Item_form::destroy($id);
    return redirect('donationitemform')->with('flash_message','donationitemform deleted!');
    }


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
$filename='';
    if ($request->hasFile('image')) {
        $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('/assets/img/'), $filename);     
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
        'image' => $filename,

    ]);

    return redirect()->route('paysuccess')->with([
        'success' => 'Donation successfully
    '
    ]);
    }
}
