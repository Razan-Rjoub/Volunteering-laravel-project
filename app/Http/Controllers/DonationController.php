<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Http\Requests\StoreDonationRequest;
use App\Http\Requests\UpdateDonationRequest;
use App\Models\Donation_form;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class DonationController extends Controller
{
    public function inDonation()
    {
        $donation = Donation::all();
        $totals = Donation_form::select('donation_id', DB::raw('SUM(price) as total_price'))
        ->groupBy('donation_id')
        ->get();

        return view('Donation.donation',compact('donation','totals'));
    }


    public function formDonation($id)
    {
        $donation = Donation::find($id);


        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::find($userId);
            return view('Donation.donationform', compact('user', 'donation'));
        }
        return redirect()->route('login');

    }
}
