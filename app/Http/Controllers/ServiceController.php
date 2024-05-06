<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service_index(){
        return view('Service.newservice');
    }
}
