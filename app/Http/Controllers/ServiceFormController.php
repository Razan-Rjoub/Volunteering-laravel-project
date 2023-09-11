<?php
namespace App\Http\Controllers;

use App\Models\Service_form;
use App\Http\Requests\StoreService_formRequest;
use App\Http\Requests\UpdateService_formRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ServiceFormController extends Controller
{

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



}
