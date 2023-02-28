<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class weatherController extends Controller
{
    public function search($city)
    {
        $getWeather = Http::get('http://api.weatherapi.com/v1/current.json?key=6b0ecdfd52484a22b6d71723232802&q='.$city.'&aqi=no')->json();
        $dataAPI =  response()->json($getWeather);
        return $dataAPI;
    }
}
