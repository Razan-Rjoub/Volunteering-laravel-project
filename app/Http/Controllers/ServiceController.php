<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{

    

  public function inService()
{
    $data= Service::all();
    return view('Service.service',['service'=>$data]);
}


public function formService($id) {
    // Use the $id parameter to retrieve the specific service data
    $service = Service::find($id);

    // Your logic here...

    return view('service.serviceform', compact('service'));
}

}
