<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Donation_form;
use App\Http\Requests\StoreDonation_formRequest;
use App\Http\Requests\UpdateDonation_formRequest;
use Auth;
use Illuminate\Http\Request;


class DonationFormController extends Controller
{

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
