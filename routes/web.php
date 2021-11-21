<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get( "name", [HomeController::class, "getName"]);

Route::get( "lastname", [HomeController::class, "getLName"]);

Route::get( "hobby", [HomeController::class, "getHobby"]);

Route::get( "pet", [HomeController::class, "getPet"]);

Route::get( "country", [HomeController::class, "getCountry"]);

Route::post("postMessage", function(){
    $array = ['message' => 'warmatebit ganaxlda'];
    return response()->json($array);
})->name('post');
Route::put("putMessage", function(){
    $array = ['message' => 'warmatebit daemata'];
    return response()->json($array);
})->name('put');
Route::delete("deleteMessage",  function(){
    $array = ['message' => 'warmatebit waishala'];
    return response()->json($array);
})->name('delete');


