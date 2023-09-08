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
     * @param  \App\Http\Requests\StoreService_formRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreService_formRequest $request)
    {
           $serviceForm = new Service_form;
    
        // Set the values for the name and password fields
        $serviceForm->service = $request->input('service');
        $serviceForm->description = $request->input('description');
        $serviceForm->date = $request->input('date');
        $serviceForm->time = $request->input('time');
    
        // Save the model to the database
        $serviceForm->save();
    
        // Redirect to the home route
        return redirect()->route('Service.service');
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
    public function destroy(Service_form $service_form)
    {
        //
    }
}
