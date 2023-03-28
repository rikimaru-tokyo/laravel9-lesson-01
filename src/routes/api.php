<?php

use App\Http\Controllers;
use App\Http\Controllers\JunkAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/h', function () {
    return  response()->json('{"health":"OK"}', 200);
});

Route::get('/j',[JunkAPI::class,'index']);


