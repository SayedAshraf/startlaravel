<?php
/*
|--------------------------------------------------------------------------
| Web Routes for Admin
|--------------------------------------------------------------------------
*/

Route::get('admin', function () {
    return "hello Admin";
});

// namespace
Route::namespace("Admin")->group(function () {

    //all routes only access controller or methods in folder front
    Route::get('users', 'SecondController@ShowString1');
});
