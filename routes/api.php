<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix("{lang}")->group(function() {
	Route::apiResource("event-type", "EventTypeController")->only(["index"]);
	Route::apiResource("event", "EventController")->only(["index"]);
	Route::apiResource("continent", "ContinentController")->only(["index"]);
});

Route::get("/", "HomeController@index");

Route::fallback("FallbackController@index");
