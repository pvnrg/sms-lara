<?php
/**
 * Created by PhpStorm.
 * User: Vimal
 * Date: 15-May-17
 * Time: 1:25 PM
 */

// Check role anywhere
if(Auth::check() && Auth::user()->hasRole('admin')) {
    // Do admin stuff here
} else {
    // Do nothing
}

// Check role in route middleware
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'roles'], 'roles' => 'admin'], function () {
    Route::get('/', ['uses' => 'AdminController@index']);
});

if($user->can('permission-name')) {
    // Do something
}