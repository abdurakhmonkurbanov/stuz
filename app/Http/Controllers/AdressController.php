<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\region;
use App\Models\school;


class AdressController extends Controller
{
    public function  getRegions(Request $request){
        $regions = region::where('viloyat_id','=',$request->viloyat_id)->get();

        return $regions;
    }

    public function  getSchools(Request $request){
        $schools = school::where('region_id','=',$request->region_id)->get();
        return $schools;
    }
}
