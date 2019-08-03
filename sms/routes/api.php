<?php

use Illuminate\Http\Request;


header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *, Origin, Content-Type, Authorization, X-Auth-Token, x-xsrf-token ');
header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, HEAD, OPTIONS');



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

Route::group(['prefix' => 'v1.0/',  'namespace' => 'Api'], function () {
    
    Route::get('user/login', 'UsersController@login');
    Route::post('user/forgotpassword', 'UsersController@forgotPassword');

});


Route::group(['prefix' => 'v1.0/', 'middleware' => ['null_to_blank','api_pass'], 'namespace' => 'Api'], function () {

    Route::post('user/changepassword', 'UsersController@changePassword');
    Route::post('user/logout', 'UsersController@logout');
    
    //Customer & Providers
    Route::post('/updateCustomer', 'PartyController@updateCustomer');
    Route::post('/customerList', 'PartyController@customerList');
    Route::get('/getCustomer', 'PartyController@getCustomer');   // customer ID
    Route::get('/getProviders', 'PartyController@getProviders');  

    //Offers
    Route::get('/fetchPackageList', 'PartyController@fetchPackageList');  // customer ID
    Route::post('/createoffer', 'PartyController@createoffer');
    Route::get('/offersList', 'PartyController@offersList');   // customer ID
    Route::post('/changeOfferStatus', 'PartyController@changeOfferStatus');
    Route::get('/changeMode', 'PartyController@changeMode'); // Job id
    Route::get('/offerDetail', 'PartyController@offerDetail'); // Offer id
    Route::delete('/deleteOffer', 'PartyController@deleteOffer'); // Offer id
    Route::post('/addfile', 'PartyController@addfile'); 
    Route::get('/folderList', 'PartyController@folderList');   // customer ID

    //Job
    Route::post('/jobList', 'JobController@jobList');
    Route::post('/changeJobStatus', 'JobController@changeJobStatus');
    Route::post('/changeDate','JobController@change_date');
    Route::get('/getJob', 'JobController@getJob');   // Job ID
    Route::post('/updateJob', 'JobController@updateJob');
    
    // Dropdown Values    
    Route::get('/dropdownValues', 'JobController@dropdownValues');  
    
 });

Route::post('/partiesAdd', 'Api\PartyController@AddPartyData');



/*
Route::group(['prefix' => 'v1.0/', 'middleware' => 'jwt.auth', 'namespace' => 'Api'], function () {
    Route::get('user', 'UsersController@getAuthUser');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
    Route::post('user/register', 'UsersController@register');
    Route::post('/getpackage', 'UsersController@getpackage');   
    Route::get('/customerList', 'PartyController@customerList');
    Route::post('user/getopportunity', 'UsersController@getopportunity');
    Route::post('addUser', 'UsersController@addUser');
    Route::put('updateUser', 'UsersController@updateUser');
    Route::post('/addCustomer', 'PartyController@addCustomer');

*/




