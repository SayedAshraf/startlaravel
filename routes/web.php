<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

//bbase fel array verify be true 3shan a2olow lazem b3m may3mel login y3mel verify
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('index', 'Front\UserController@getIndex');

// Route::get('landing', 'Front\FirstController@HomePage');

// Route::get('about', 'Front\FirstController@AboutUS');

// Route::get('/test', function () {
//     return "Welcome laravel";
// });

// //Parameter Route

// // {} required parameter
// Route::get('/show-number/{id}', function ($id) {
//     return $id;
// });

// // {--?} non required parameter
// Route::get('/test5/{id?}', function () {
//     return "SA";
// });

// //Route name
// Route::get('/show-number/{id}', function ($id) {
//     return $id;
// }) -> name("a");

// Route::get('/show-string', function () {
//     return "Welcome laravel";
// }) -> name("b");

// Route::get('login', function () {
//     return "You must be logged In";
// })-> name('login');


// // Route prefix -> it's easy to say show , delte insted of user/show  , user/delte
// Route::prefix('user') ->group(function () {
//     Route::get('show', 'UserController@ShowUsers');
//     Route::get('delete', 'UserController@DeleteUsers');
// });


// // Route prefix -> it's easy to say show , delte insted of user/show  , user/delte
// Route::group(['prefix' => 'userss' , 'middleware' => 'auth'], function () {
//     Route::get('/', function () {
//         return "Work";
//     });
// });

// //Route middleware
// Route::get('middle', function () {
//     return "middleware";
// })->middleware('auth');


// // resource Controller ( index , create , store , show , delete , edit )
// Route::resource('news', 'NewsController');
