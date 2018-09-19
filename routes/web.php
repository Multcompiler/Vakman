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


Route::get('/', [
    "uses" => "HomeController@index",
    "as" => "home_page"
]);
Route::get('/Rooms/Search', [
    "uses" => "RoomController@index",
    "as" => "search"
]);
Route::get('/Rooms/View/Category/{category}/Id/{id}', [
    "uses" => "RoomController@view_single_room",
    "as" => "view_single_room"
]);
Route::get('/Rooms/Rent/View', [
    "uses" => "RoomController@rent_view",
    "as" => "rent_page"
]);
Route::get('/Rooms/Buy/View', [
    "uses" => "RoomController@buy_view",
    "as" => "buy_page"
]);
Route::get('/Rooms/Sell/View', [
    "uses" => "RoomController@sell_view",
    "as" => "sell_page"
]);
Route::get('/get/professions', [
    "uses" => "ProfileController@get_list"
]);
Route::get('/get/professions/list/{profession_id}/{region_id}', [
    "uses" => "ProfileController@get_list_professionals"
]);

