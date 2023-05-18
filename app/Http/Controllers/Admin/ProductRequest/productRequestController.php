<?php

namespace App\Http\Controllers\Admin\ProductRequest;

use App\Http\Controllers\Controller;
use App\Models\productRequestModal;

class productRequestController extends Controller
{
   
    public function listRequest()
    {
        $requests=productRequestModal::get();
        return view('Admin.ProductRequest.RequestList',compact('requests'));
    }
}
