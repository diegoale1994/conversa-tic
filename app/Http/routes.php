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
Route::get('/',"FrontController@index");
Route::get('user_stage_registered/{id}',['as'=>'user_stage_registered.store', 'uses'=>'UserController@ingreso']);
Route::Resource('users_conversatic_registered',"UserController@index");
Route::Resource('registro',"UserController");
Route::Resource('user_stage_register',"UserController@show_form");
Route::Resource('winner',"UserController@winner");
Route::Resource('user_confirm_event/{token}',"UserController@confirm_user");



