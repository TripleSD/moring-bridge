<?php

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['prefix' => 'v1', 'namespace' => 'Api'], function () {
    
    Route::group(['prefix' => 'bridge', 'namespace' => 'Bridge'], function () {
            Route::get('version', 'BridgeInfoController@getCurrentVersion');
    });

    Route::group(['prefix' => 'moring','namespace' => 'Moring'], function () {
        Route::get('version', 'MoringInfoController@getVersions');
    });

    Route::group(['prefix' => 'php','namespace' => 'Php'], function () {
        Route::get('versions', 'PhpInfoController@getActualVersions');
    });
});
