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

//index
Route::get('/', function () {
    return view('index');
});

//首页  91恋车  1元学车  学车保障  公司团队  行业影响力 
   
Route::get('/bbwx', function () {
    return view('bbwx');
});

Route::get('/yyxc', function () {
    return view('yyxc');
});

Route::get('/xcbz', function () {
    return view('xcbz');
});


Route::get('/gstd', function () {
    return view('gstd');
});

Route::get('/hyyx', function () {
    return view('hyyx');
});

Route::get('/whfl', function () {
    return view('whfl');
});

Route::get('/rczp', function () {
    return view('rczp');
});

Route::get('qyry', function () {
    return view('qyry');
});

Route::get('kjmt', function () {
    return view('kjmt');
});

Route::get('pphd', function () {
    return view('pphd');
});
//Route::get('user/{id}', 'UserController@showProfile');