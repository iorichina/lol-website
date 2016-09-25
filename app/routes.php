<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'HomeController@showWelcome');
Route::get('/hello', function()
{
    return View::make('hello');
});
Route::controller('/default', 'HomeController');
// 召唤师
Route::group(array('namespace' => 'Summoners', 'prefix' => 'summoners'), function(){
    Route::controller('info', 'InfoController');
});
// 接口
Route::group(array('namespace' => 'Api', 'prefix' => 'api'), function(){
    Route::group(array('namespace' => 'Search', 'prefix' => 'search'), function(){
        Route::controller('summoner', 'SummonerController');
    });
});

// 英雄
Route::group(array('namespace' => 'Champions', 'prefix' => 'champions'), function(){
    // 英雄信息
    Route::group(array('prefix' => 'game'), function(){
        Route::get ('info/detail-of-{name?}', 'InfoController@getDetailOf');
        Route::controller('info', 'InfoController');
    });
});