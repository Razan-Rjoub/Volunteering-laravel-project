<?php

namespace App\Http\Controllers;

use App\Models\Service_form;
use App\Http\Requests\StoreService_formRequest;
use App\Http\Requests\UpdateService_formRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Service;

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



    public function infoService()
    {
        return view('Service.serviceform');


    }



     public function stoService(Request $request)
     {
         $request->validate([
             'description' => 'required',
             'date' => 'required|date',
             'time' => 'required',
             'service_id' => 'required', // Add validation rule for service_id
         ]);

         Service_form::create([
             'user_id' => Auth::id(),
             'name' => $request->input('name'),
             'email' => $request->input('email'),
             'phone' => $request->input('phone'),
             'service_id' => $request->input('service_id'), // Retrieve service_id from the form
             'description' => $request->input('description'),
             'Date' => $request->input('date'),
             'time' => $request->input('time')
         ]);

         // Redirect back with a success message or handle the response as needed
         return redirect()->back()->with('success', 'Service form submitted successfully');
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
