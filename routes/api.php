<?php

use App\Http\Controllers\ProjectController;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['middleware' => 'api'], function () {
    Route::resource('projects', ProjectController::class);
});
