<?php

namespace App\Http\Controllers;

use App\Models\Donation_form;
use App\Http\Requests\StoreDonation_formRequest;
use App\Http\Requests\UpdateDonation_formRequest;

class DonationFormController extends Controller
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
    public function destroy(Donation_form $donation_form)
    {
        //
    }
}
