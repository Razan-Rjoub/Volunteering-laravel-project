<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Http\Requests\StoreDonationRequest;
use App\Http\Requests\UpdateDonationRequest;
use App\Models\Donation_form;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class DonationController extends Controller
{
    public function index()
    {
        $data = Donation::all();
        return view('Donation.donation', ['donation' => $data]);
    }


    public function form($id)
    {
        $donation = Donation::find($id);

        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::find($userId);
            return view('Donation.donationform', compact('user', 'donation'));
        }
        return redirect()->route('login');

    }


    public function submit(Request $request)
    {
        // if (Auth::check()) {
        //     $userId = Auth::id();}
        // Donation_form::create([
        //     'price' => $request->price,
        //     'user_id' =>$userId,
        //     'donation_id'=>$request->donation_id,
        // ]);

        // return redirect()->route('home')->with([
        //     'success' => 'created successfully'
        // ]);
    }


    public function show(Donation $donation)
    {
        //
    }


    public function edit(Donation $donation)
    {
        //
    }


    public function update(UpdateDonationRequest $request, Donation $donation)
    {
        //
    }


    public function destroy(Donation $donation)
    {
        //
    }
}
