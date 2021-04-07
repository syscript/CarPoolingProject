<?php

namespace App\Http\Controllers\PagesControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DriversController extends Controller
{

    /**
     * Get the drivers view page
     * */
    public function index(){
        return view('drivers');
    }
}
