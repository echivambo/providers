<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class printProviderController extends Controller
{
    public function index(){

        return view('printProvider');
    }
}
