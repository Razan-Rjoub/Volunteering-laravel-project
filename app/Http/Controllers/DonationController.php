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
        return view('Donation.donation',['donation'=>$data]); 
    }


    public function create()
    {
        //
    }


    public function store(StoreDonationRequest $request)
    {
        //
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
