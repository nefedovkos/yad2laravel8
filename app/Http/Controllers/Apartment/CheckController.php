<?php

namespace App\Http\Controllers\Apartment;

use App\Http\Controllers\Controller;
use App\Models\Part1;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CheckController extends Controller
{
    public function check(Request $request)
    {
        dd($request);

        // $values = Validator::make((array)$request, [
        //     "a2-apartment-type" =>  ['required', 'number', 'max:2'],
        //      "a2-city" => ['required', 'string', 'max:255'],
        //      "a2-street" =>  ['boolean'],
        //      "a2-apatrtment-number" =>  ['required', 'number'],
        //      "a2-apatrtment-floor" =>  ['number', 'max:2'],
        //      "a2-apatrtment-floor-max" =>  ['number', 'max:2'],
        //      "a2-is-on-stand" =>  ['boolean'],
        //      "a2-parked" =>  ['string', 'max:255'],
        //      "a2-parked-sector" =>  [ 'string', 'max:255'],
        //      "a2-monthly-ad" =>  ['boolean'],
        // ]);



        $values = Validator::make((array)$request, [
            "a2-apartment-type" =>  ['required', 'number', 'max:2'],
             "a2-city" => ['required', 'string', 'max:255'],
             "a2-street" =>  ['boolean'],
             "a2-apatrtment-number" =>  ['required', 'number'],
             "a2-apatrtment-floor" =>  ['number', 'max:2'],
             "a2-apatrtment-floor-max" =>  ['number', 'max:2'],
             "a2-is-on-stand" =>  ['boolean'],
             "a2-parked" =>  ['string', 'max:255'],
             "a2-parked-sector" =>  [ 'string', 'max:255'],
             "a2-monthly-ad" =>  ['boolean'],
        ]);

//
        return Part1::create([

        ]);



    }
}
