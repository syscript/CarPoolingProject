<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


/*
 * Multi Language Route .. Mcamara
 * */
Route::group(['prefix' => LaravelLocalization::setLocale() ,
                'middleware' => ['localeSessionRedirect' , 'localizationRedirect' , 'localeViewPath']] ,
     function(){

    /*
     * Main Routes to open Main Pages
     * */
    Route::group(["namespace" => "PagesControllers"] , function(){
        Route::get('/' , 'HomeController@index') ->name('home');
        Route::get('/drivers' , 'DriversController@index') ->name('drivers');
        Route::get('/rides' , 'RidesController@index') ->name('rides');
        Route::get('/evaluations' , 'EvaluationsController@index') ->name('evaluations');
    });

    /*
     * Routes for auth drivers to make own drivers operations
     * Create Journeys
     * Add Cars
     * */
    Route::group(['prefix' => 'drivers' , 'namespace' => 'Drivers' , 'middleware' => 'driver'] , function(){
        Route::get('/create-ride' , 'CreateRideController@index')->name('createRideIndex');
        Route::post('/create-ride/create' , 'CreateRideController@store') ->name ('createRide');
        Route::get('/addCar' , 'AddCarController@index')->name('addCarIndex');
    });



    //////////////////// Redirect pages after failed with errors \\\\\\\\\\\\\\\\\



    //////////////////////////////////////////////////////////



    ///////////////////////////////////////////// Routes for test /////////////////////
    Route::view('/master' , 'layouts.master');
    Route::get('show-users' , 'Tests\TestController@showUsers');
    Route::get('show' , 'Tests\TestController@show');
    Route::get('show-drivers' , 'Tests\TestController@showDrivers');
    Route::get('show-cars' , 'Tests\TestController@showCars');
    //////////////////////////////////////////////////////////////////////////////////



    //////////// Authentication & Registering $ Login /////////////
    Auth::routes();
    Route::get('/updateAccount/{id}' , 'Auth\UpdateAccountController@index') -> name('updateAccount');
    Route::post('/updateAccount/update/{id}' , 'Auth\UpdateAccountController@update') -> name('updateRegister');
    // Route::resource('updateAccount' , 'Auth\UpdateAccountController');
    // Route::get('/home', 'HomeController@index')->name('home');
    ///////////////////////////////////////////////////////////////////////////////

});
