<?php

namespace App\Http\Controllers;

use App\Models\Service_form;
use App\Http\Requests\StoreService_formRequest;
use App\Http\Requests\UpdateService_formRequest;

class ServiceFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Service_form::all();
        return view('dashboardbage.donatedservicesform')->with('data', $data);
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
     * @param  \App\Http\Requests\StoreService_formRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreService_formRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service_form  $service_form
     * @return \Illuminate\Http\Response
     */
    public function show(Service_form $service_form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service_form  $service_form
     * @return \Illuminate\Http\Response
     */
    public function edit(Service_form $service_form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateService_formRequest  $request
     * @param  \App\Models\Service_form  $service_form
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateService_formRequest $request, Service_form $service_form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service_form  $service_form
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service_form::find($id)->delete();
        Service_form::destroy($id);
    return redirect('donatedservicesform')->with('flash_message','donated services form deleted!');
    }
}
