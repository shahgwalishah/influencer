<?php

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
    return redirect()->route('dashboard');
});

//frontend routes
$namespaceFrontend = 'App\Http\Controllers\Frontend';

Route::get('/dashboard','App\Http\Controllers\DashboardController@dashboard')->name('dashboard');

Route::namespace($namespaceFrontend)->group(function () {
    Route::get('/add-campaign','CampaignController@addCampaign')->name('add-campaign');
    Route::get('/my-campaign','CampaignController@myCampaign')->name('my-campaign');
});
