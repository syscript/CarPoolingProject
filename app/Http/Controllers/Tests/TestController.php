<?php

namespace App\Http\Controllers\Tests;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\City;
use App\Models\Driver;
use App\Models\Ride;
use App\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('driver')->only('showDrivers');
    }

    public function showUsers(){
        $users = User::with('driver')->get();
        return $users;
    }

    public function showDrivers(){
        $drivers = Driver::with('user' , 'cars' ,'rides' )->get();
        return $drivers;
    }

    public function showCars(){
        $cars = Car::with('driver')->with('rides')->get();
        return $cars;
    }

    public function show(){
        $test = City::get()[0];
        return $test;
    }
}
