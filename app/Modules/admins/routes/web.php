<?php

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

$name   = basename(dirname(__DIR__, 1));
//Route::get('/test', "\Admins\Http\Controllers\Web\AdminController@index");

Route::namespace(build_controller_namespace( $name ))->group(function () use($name){

    Route::prefix(build_prefix($name, "web"))->namespace("Web")->group(function (){

        Route::get('/test', "AdminController@index");

    });
});