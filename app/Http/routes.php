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

Route::get('/', function () {
    return view('welcome');
});
/******************** reward ********************/
// get all
Route::get('/rewards', 'RewardController@index');
//get by id
Route::get('/rewards/{id}', 'RewardController@show');
//create
Route::post('/rewards', 'RewardController@store');
//update
Route::put('/rewards/{id}', 'RewardController@update');
//delete
Route::delete('/rewards/{id}', 'RewardController@destroy');
/************************************************/
/******************** user ********************/
// get all
Route::get('/users', 'UserController@index');
//get by id
Route::get('/users/{id}', 'UserController@show');
//create
Route::post('/users', 'UserController@store');
//update
Route::put('/users/{id}', 'UserController@update');
//delete
Route::delete('/users/{id}', 'UserController@destroy');
/************************************************/
/******************** companies ********************/
// get all
Route::get('/companies', 'CompanyController@index');
//get by id
Route::get('/companies/{id}', 'CompanyController@show');
//create
Route::post('/companies', 'CompanyController@store');
//update
Route::put('/companies/{id}', 'CompanyController@update');
//delete
Route::delete('/companies/{id}', 'CompanyController@destroy');
/************************************************/
/******************** reward suppliers ********************/
// get all
Route::get('/reward-suppliers', 'RewardSupplierController@index');
//get by id
Route::get('/reward-suppliers/{id}', 'RewardSupplierController@show');
//create
Route::post('/reward-suppliers', 'RewardSupplierController@store');
//update
Route::put('/reward-suppliers/{id}', 'RewardSupplierController@update');
//delete
Route::delete('/reward-suppliers/{id}', 'RewardSupplierController@destroy');
/************************************************/
/******************** cards ********************/
// get all
Route::get('/cards', 'CardController@index');
//get by id
Route::get('/cards/{id}', 'CardController@show');
//create
Route::post('/cards', 'CardController@store');
//update
Route::put('/cards/{id}', 'CardController@update');
//delete
Route::delete('/cards/{id}', 'CardController@destroy');
/************************************************/