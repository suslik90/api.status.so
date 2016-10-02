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
/******************** tradepoints ********************/
// get all
Route::get('/tradepoints', 'TradepointController@index');
//get by id
Route::get('/tradepoints/{id}', 'TradepointController@show');
//create
Route::post('/tradepoints', 'TradepointController@store');
//update
Route::put('/tradepoints/{id}', 'TradepointController@update');
//delete
Route::delete('/tradepoints/{id}', 'TradepointController@destroy');
/************************************************/
/******************** cheques ********************/
// get all
Route::get('/cheques', 'ChequeController@index');
//get by id
Route::get('/cheques/{id}', 'ChequeController@show');
//create
Route::post('/cheques', 'ChequeController@store');
//update
Route::put('/cheques/{id}', 'ChequeController@update');
//delete
Route::delete('/cheques/{id}', 'ChequeController@destroy');
/************************************************/
/******************** friends ********************/
// get all
Route::get('/friends', 'FriendController@index');
//get by id
Route::get('/friends/{id}', 'FriendController@show');
//create
Route::post('/friends', 'FriendController@store');
//update
Route::put('/friends/{id}', 'FriendController@update');
//delete
Route::delete('/friends/{id}', 'FriendController@destroy');
/************************************************/
/******************** messages ********************/
// get all
Route::get('/messages', 'MessageController@index');
//get by id
Route::get('/messages/{id}', 'MessageController@show');
//create
Route::post('/messages', 'MessageController@store');
//update
Route::put('/messages/{id}', 'MessageController@update');
//delete
Route::delete('/messages/{id}', 'MessageController@destroy');
/************************************************/
/******************** user-rewards ********************/
// get all
Route::get('/user-rewards', 'UserRewardController@index');
//get by id
Route::get('/user-rewards/{id}', 'UserRewardController@show');
//create
Route::post('/user-rewards', 'UserRewardController@store');
//update
Route::put('/user-rewards/{id}', 'UserRewardController@update');
//delete
Route::delete('/user-rewards/{id}', 'UserRewardController@destroy');
/************************************************/
/******************** feedbacks ********************/
// get all
Route::get('/feedbacks', 'FeedbackController@index');
//get by id
Route::get('/feedbacks/{id}', 'FeedbackController@show');
//create
Route::post('/feedbacks', 'FeedbackController@store');
//update
Route::put('/feedbacks/{id}', 'FeedbackController@update');
//delete
Route::delete('/feedbacks/{id}', 'FeedbackController@destroy');
/************************************************/
/******************** reward-shares ********************/
// get all
Route::get('/reward-shares', 'RewardShareController@index');
//get by id
Route::get('/reward-shares/{id}', 'RewardShareController@show');
//create
Route::post('/reward-shares', 'RewardShareController@store');
//update
Route::put('/reward-shares/{id}', 'RewardShareController@update');
//delete
Route::delete('/reward-shares/{id}', 'RewardShareController@destroy');
/************************************************/
/******************** reward-tradepoints ********************/
// get all
Route::get('/reward-tradepoints', 'RewardTradepointController@index');
//get by id
Route::get('/reward-tradepoints/{id}', 'RewardTradepointController@show');
//create
Route::post('/reward-tradepoints', 'RewardTradepointController@store');
//update
Route::put('/reward-tradepoints/{id}', 'RewardTradepointController@update');
//delete
Route::delete('/reward-tradepoints/{id}', 'RewardTradepointController@destroy');
/************************************************/
/******************** staff ********************/
// get all
Route::get('/staff', 'StaffController@index');
//get by id
Route::get('/staff/{id}', 'StaffController@show');
//create
Route::post('/staff', 'StaffController@store');
//update
Route::put('/staff/{id}', 'StaffController@update');
//delete
Route::delete('/staff/{id}', 'StaffController@destroy');
/************************************************/
/******************** user-settings ********************/
// get all
Route::get('/user-settings', 'UserSettingsController@index');
//get by id
Route::get('/user-settings/{id}', 'UserSettingsController@show');
//create
Route::post('/user-settings', 'UserSettingsController@store');
//update
Route::put('/user-settings/{id}', 'UserSettingsController@update');
//delete
Route::delete('/user-settings/{id}', 'UserSettingsController@destroy');
/************************************************/
/******************** favorites ********************/
// get all
Route::get('/favorites', 'FavoriteController@index');
//get by id
Route::get('/favorites/{id}', 'FavoriteController@show');
//create
Route::post('/favorites', 'FavoriteController@store');
//update
Route::put('/favorites/{id}', 'FavoriteController@update');
//delete
Route::delete('/favorites/{id}', 'FavoriteController@destroy');
/************************************************/
/******************** powerups ********************/
// get all
Route::get('/powerups', 'PowerupController@index');
//get by id
Route::get('/powerups/{id}', 'PowerupController@show');
//create
Route::post('/powerups', 'PowerupController@store');
//update
Route::put('/powerups/{id}', 'PowerupController@update');
//delete
Route::delete('/powerups/{id}', 'PowerupController@destroy');
/************************************************/
/******************** countries ********************/
// get all
Route::get('/countries', 'CountryController@index');
//get by id
Route::get('/countries/{id}', 'CountryController@show');
//create
Route::post('/countries', 'CountryController@store');
//update
Route::put('/countries/{id}', 'CountryController@update');
//delete
Route::delete('/countries/{id}', 'CountryController@destroy');
/************************************************/
/******************** cities ********************/
// get all
Route::get('/cities', 'CityController@index');
//get by id
Route::get('/cities/{id}', 'CityController@show');
//create
Route::post('/cities', 'CityController@store');
//update
Route::put('/cities/{id}', 'CityController@update');
//delete
Route::delete('/cities/{id}', 'CityController@destroy');
/************************************************/