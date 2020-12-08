<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\CountryWithCity;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function addCountry(Request $request){
        Country::create([
           'name' => $request->name,
           'image' => $request->image
        ]);
        return Country::all();
    }

    public function addCity(Request $request){
        City::create([
            'name' => $request->name,
            'image' => $request->image
        ]);
        return City::all();
    }

    public function createCountryCity(Request $request){
        CountryWithCity::create([
           'name' => $request->name,
           'image'
        ]);
    }
}
