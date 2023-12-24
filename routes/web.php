<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//view seat plan
Route::get('/busSeat',[homeController::class,'viewBusSeat'])->name('bus.seat');

Route::post('/seat',[homeController::class,'seat'])->name('bus');



Route::get('/sample',[homeController::class,'sample']);

//show all available trip
Route::get('/showTrip',[homeController::class,'showTrip'])->name('trip.show');
//show creat Trip page
Route::get('/trip',[homeController::class,'showTripForm'])->name('trip.form');
//store new trip
Route::post('/trip/store',[homeController::class,'storeTrip'])->name('trip.store');

