<?php

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

    Route::group(['prefix' => 'statistics','namespace' => 'Statistics'], function () {
        Route::post('/versions/update', 'StatController@updateVersion');
//        Route::post('host', 'StatisticsSaveController@postHost');
//        Route::post('servers', 'StatisticsSaveController@postServers');
//        Route::post('sites', 'StatisticsSaveController@postSites');
    });

    Route::group(['prefix' => 'identificators','namespace' => 'Identificators'],function() {
        Route::get('/create', 'IdentificatorsInfoController@createIdentificator');
        Route::get('/check', 'IdentificatorsInfoController@checkIdentificator');
    });
});
