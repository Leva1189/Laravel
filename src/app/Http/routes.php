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

Route::get('/', ['as'=>'home', function () {
    return view('welcome');
}]);

//Route::get('/page', function () {
//    return view('page');
//});

Route::get('/env', function () {

//    dump(config('app.timezone'));
});

Route::get('/about/{id}', 'FirstController@show');

// list pages
Route::resource('/pages', 'Admin\CoreResource');

//register router MyMiddleware
Route::get('/article/{page}', ['uses'=>'Admin\Core@getArticle', 'as'=>'article', 'middleware'=>'mymiddle']);