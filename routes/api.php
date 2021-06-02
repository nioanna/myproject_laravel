<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\ResidentialBuilding;
use App\Http\Controllers\ResidentialBuildingController;

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

Route::get('residentialBuildings/{num}',[ResidentialBuildingController::class,'showNum']);

    
    Route::get('residentialBuildings',[ResidentialBuildingController::class,'index']);

  //  Route::get('residentialBuildings/{residentialBuilding}',[ResidentialBuildingController::class,'show']);

Route::group(['middleware'=>'auth:api'], function() {

    
Route::post('residentialBuildings',[ResidentialBuildingController::class,'store']);
Route::put('residentialBuildings/{residentialBuilding}', [ResidentialBuildingController::class,'update']);
Route::delete('residentialBuildings/{residentialBuilding}',[ResidentialBuildingController::class,'delete']);

    

    
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
