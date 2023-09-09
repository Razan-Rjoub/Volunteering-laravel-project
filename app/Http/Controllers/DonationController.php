<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Http\Requests\StoreDonationRequest;
use App\Http\Requests\UpdateDonationRequest;

class DonationController extends Controller
{
    public function index()
    {
        $data= Donation::all();
        return view('dashboardbage.Donations')->with('data', $data);
    }


    public function create()
    {
        return view('dashboardbage.creatdonation');

    }


    public function store(StoreDonationRequest $request)
    {

        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
        }

        $input =$request->all();

        Donation::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $filename,
            'amount_needed' => $request->amount_needed ,

        ]);
       return redirect('donation')->with('flash_message','donation Added!');
    }


    public function show(Donation $donation)
    {
        //
    }


    public function edit($id)
    {
        $data=Donation::find($id);
        return view('dashboardbage.editdonation')->with('data',$data);
    }


    public function update(UpdateDonationRequest $request, $id)
    {
        $data=Donation::find($id);
        $input=$request->all();
        $data->update($input);
         return redirect('donation')->with('flash_message','Donation Update!');
    }


    public function destroy($id)
    {

        Donation::destroy($id);
    return redirect('donation')->with('flash_message','donation deleted!');

    }
}
