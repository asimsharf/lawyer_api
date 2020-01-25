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

Route::apiResource('/counteries', 'CounteryController');
Route::group(['prefix'=>'counteries'], function(){
    Route::apiResource('/{countery}/cities', 'CityController');
});

// Route::apiResource('/Document', 'DocumentController');
// Route::apiResource('/DocumentType', 'DocumentTypeController');
// Route::apiResource('/Lawyer','LawyerController');



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
