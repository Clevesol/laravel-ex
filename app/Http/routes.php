<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
	return 'worked'; 
});

Route::get('/install', function(){
	return  "<a style='font-size:28px;width:100%;text-align:center' href='itms-services://?action=download-manifest&amp;url=https://raw.githubusercontent.com/Clevesol/laravel-ex/master/storage/app/public/manifest.plist'>Download Custom SMS App</a>";
});
