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

Route::get('/', function () {
    return view('welcome');
});
Route::get('tours', function () {
    return view('tours');
});
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('restaurants', function () {
    return view('restaurants');
});
Route::get('advertise', function () {
    return view('advertise');
});
Route::get('about', function () {
    return view('about');
});
Route::get('recommended', function () {
    return view('recommended');
});
Route::get('history', function () {
    return view('history');
});
Route::get('safety', function () {
    return view('safety');
});
Route::get('beaches', function () {
    return view('beaches');
});
Route::get('retire', function () {
    return view('retire');
});
Route::get('tipping', function () {
    return view('tipping');
});
Route::get('taxis', function () {
    return view('taxis');
});
Route::get('drinking', function () {
    return view('drinking');
});
Route::get('speak', function () {
    return view('speak');
});
Route::get('temperature', function () {
    return view('temperature');
});
Route::get('weddings', function () {
    return view('weddings');
});
Route::get('driving', function () {
    return view('driving');
});
Route::get('golf', function () {
    return view('golf');
});