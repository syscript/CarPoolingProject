<?php

namespace App\Http\Controllers\PagesControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RidesController extends Controller
{

    /**
     * Get the journeys view page
     * */
    public function index(){
        return view('journeys');
    }
}
