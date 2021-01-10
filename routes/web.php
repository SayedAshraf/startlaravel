<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return "Welcome laravel";
});

//Parameter Route
// {} required parameter
Route::get('/show-number/{id}', function ($id) {
    return $id;
});

// {--?} non required parameter
Route::get('/test5/{id?}', function () {
    return "SA";
});

//Route name
Route::get('/show-number/{id}', function ($id) {
    return $id;
}) -> name("a");

Route::get('/show-string', function () {
    return "Welcome laravel";
}) -> name("b");


// Route prefix -> it's easy to say show , delte insted of user/show  , user/delte
Route::prefix('user') ->group(function () {
    Route::get('show', 'UserController@ShowUsers');
    Route::get('delete', 'UserController@DeleteUsers');
});


// Route prefix -> it's easy to say show , delte insted of user/show  , user/delte
Route::group(['prefix' => 'userss' , 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return "Work";
    });
});

//Route middleware
Route::get('middle', function () {
    return "middleware";
})->middleware('auth');
