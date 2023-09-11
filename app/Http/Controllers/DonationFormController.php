<?php

namespace App\Http\Controllers;

use App\Models\Donation_form;
use App\Http\Requests\StoreDonation_formRequest;
use App\Http\Requests\UpdateDonation_formRequest;
use App\Models\Donation;
use Auth;
use Illuminate\Http\Request;

class DonationFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $data= Donation_form::all();
        return view('dashboardbage.DonationForm')->with('data', $data);
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
     * @param  \App\Http\Requests\StoreDonation_formRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDonation_formRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donation_form  $donation_form
     * @return \Illuminate\Http\Response
     */
    public function show(Donation_form $donation_form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donation_form  $donation_form
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation_form $donation_form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDonation_formRequest  $request
     * @param  \App\Models\Donation_form  $donation_form
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDonation_formRequest $request, Donation_form $donation_form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donation_form  $donation_form
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Donation_form::find($id)->delete();
        Donation_form::destroy($id);
    return redirect('donationform')->with('flash_message','donationform deleted!');

    }


    public function stoDonation(Request $request)
    {
        $request->validate([
            'name' => 'required',
             'email' => ['required', 'email', 'ends_with:.com'],
             'phone' => ['required', 'regex:/^07[789]\d{7}$/'], 
            'price' => 'required|numeric',
            'donation_id' => 'required|numeric',
        ],
        [
         'phone.regex' => 'The phone  must start with 07 and to be 10 number.'
         ]);
      


        Donation_form::create([
            'price' => $request->input('price'),
            'user_id' => Auth::id(),
            'donation_id' => $request->input('donation_id'),
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone')
        ]);
        $donationId = $request->input('donation_id');
        $totalAmountDonated = Donation_form::where('donation_id', $donationId)->sum('price');
        $donation = Donation::find($donationId);

        if ($donation) {
            $donation->update(['amount_donated' => $totalAmountDonated]);
            $donation->save();
        }
        return redirect()->route('payment', ['price' => $request->input('price')]);
    }
}
