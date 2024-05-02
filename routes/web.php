<?php
// Namespaces
use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route of Geolocation

Route::get('show-user-location-data',[LocationController::class,'index']);