<?php

namespace App\Http\Controllers\Drivers;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Driver;
use Illuminate\Http\Request;
use App\Models\Ride;

class CreateRideController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $cars = Driver::get()[0]->cars;
        $cities = City::get();
        return view('drivers.createRide') -> with(compact('cars' , 'cities'));
    }


    /**
     * Get data from drivers.createRide view to add it to Ride Model
     * @param Request $request
     * @return view redirect to drivers.createRide view after adding with success or failed msg
     */
    public function store(Request $request){
        $create = Ride::create($request->all());
        if(!$create)
            return redirect()->back()->with(['error' => 'The ride is not Created']);

        return redirect()->back()->with(['success' => 'Ride Created Successfully']);
    }
}
