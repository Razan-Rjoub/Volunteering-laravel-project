<?php

namespace App\Http\Controllers;


use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Item::all();
        return view('dashboardbage.DonatedItems')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardbage.creatiteam');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemRequest $request)
    {

        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
        }

        $input =$request->all();

        Item::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $filename,


        ]);
       return redirect('donateditems')->with('flash_message','donated items Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Item::find($id);
        return view('dashboardbage.editdonationitem')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemRequest  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */

    

     public function update(UpdateItemRequest $request, $id)
     {

         $data = Item::find($id);


         if ($request->hasFile('image')) {

             if (file_exists(public_path($data->image))) {
                 unlink(public_path($data->image));
             }


             $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
             $request->image->move(public_path('/assets/img/'), $filename);


             $data->update(['image' => $filename]);
         }


         $data->update([
             'name' => $request->name,
             'description' => $request->description,
             'amount_needed' => $request->amount_needed,
         ]);

         return redirect('donateditems')->with('flash_message', 'Donation Update!');
     }





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Item::destroy($id);
    return redirect('donateditems')->with('flash_message','donated items deleted!');

    }
}
