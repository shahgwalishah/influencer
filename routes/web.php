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
    Route::get('/my-campaign-lists','CampaignController@myCampaignLists')->name('my-campaign-lists');
    Route::get('/available-campaign','CampaignController@avilableCampaign')->name('available-campaign');
    Route::get('/coming-soon','CampaignController@soonCampaign')->name('coming-soon');
    Route::get('/campaign-complete','CampaignController@campaignComplete')->name('campaignComplete');
    Route::get('/campaign-detail','CampaignController@campaignDetail')->name('campaignDetail');
    Route::get('/campaign-dashboard','CampaignController@campaignDashboard')->name('campaignDashboard');
    Route::get('/brands','BrandController@brands')->name('brands');
});


//auth routes
$namespaceAuthRoutes = 'App\Http\Controllers\Backend';

Route::namespace($namespaceAuthRoutes)->group(function () {
    Route::get('/login-page','AuthController@loginPage')->name('loginPage');
    Route::get('/register-page','AuthController@registerPage')->name('registerPage');
});

