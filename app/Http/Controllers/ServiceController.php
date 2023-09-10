<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function indexService()
{
    $data= Service::all();
    return view('Service.service',['service'=>$data]); 
}



public function formService($id) {
    $service = Service::find($id);

    if (Auth::check()) {
        $userId = Auth::id();
        $user = User::find($userId);
        return view('service.serviceform', compact('user','service'));
    }
        return redirect()->route('login');
    }

    
 
}
