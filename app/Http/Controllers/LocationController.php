<?php
// Namespaces
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;


// Controller of Geolocation

class LocationController extends Controller
{
    public function index(Request $request){

      //  $userIP = $request->ip();
      //or 
      //   $userIP = $_SERVER['REMOTE_ADDR'];


      //USA IP Address
      //66.102.0.0

      $userIP='66.102.0.0';

      $location=Location::get($userIP);

      return view('location',compact('location'));

    }
}
