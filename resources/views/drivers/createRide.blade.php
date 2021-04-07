@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Ride</div>

                <div class="card-body">
                    <form method="POST" action=" {{ route('createRide') }} ">
                        @csrf

{{--                        <input hidden name="driver_id" value = "{{Auth::user()->id }}">--}}

                        {{-- Select Your Car --}}
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Select Your Car</label>

                            <div class="col-md-6">
                                <select name="car_id" class="form-control">
                                    @foreach($cars as $car)
                                        <option value="{{$car->id}}">{{$car->model}}--{{$car->color}}--{{$car->make_year}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- Source City --}}
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Source City</label>

                            <div class="col-md-6">
                                <select name="source_city_id" class="form-control">
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- Enroute City --}}
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Enroute City</label>

                            <div class="col-md-6">
                                <select name="enroute_city_id" class="form-control">
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- Destination City --}}
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Destination City</label>

                            <div class="col-md-6">
                                <select name="destination_city_id" class="form-control">
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>



                        {{-- Number Of Empty Seats --}}
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Number Of Empty Seats</label>

                            <div class="col-md-6">
                                <input id="number-of-clients" type="number" class="form-control" name="number_of_clients">
                            </div>
                        </div>

                        {{-- Client Cost --}}
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Client Cost</label>

                            <div class="col-md-6">
                                <input id="number-of-clients" type="number" class="form-control" name="client_cost">
                            </div>
                        </div>

                        {{-- Start date --}}
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Start date</label>

                            <div class="col-md-6">
                                <input id="start-date" type="date" class="form-control" name="start_date">
                            </div>
                        </div>

                        {{-- Start time --}}
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Start time</label>

                            <div class="col-md-6">
                                <input id="start-time" type="time" class="form-control" name="start_time">
                            </div>
                        </div>

                        {{-- Arrive Date --}}
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Arrive Date</label>

                            <div class="col-md-6">
                                <input id="arrive-date" type="date" class="form-control" name="arrive_date">
                            </div>
                        </div>

                        {{-- Arrive Time --}}
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Arrive Time</label>

                            <div class="col-md-6">
                                <input id="arrive-time" type="time" class="form-control" name="arrive_time">
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Create Ride
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
