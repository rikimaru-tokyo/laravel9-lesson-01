<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JunkAPI extends Controller
{
    public function index(Request $request){


        return response()->json('{"hello":"world"}');

    }
}
