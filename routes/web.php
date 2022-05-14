<?php

use Illuminate\Support\Facades\Route;

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
    return view('home/index');
});
Route::get('/home/index', function () {
    return view('home/index');
});
Route::get('/about/about', function () {
    return view('about/about');
});
Route::get('/sitting', function () {
    return view('/service/sitting/sitting');
});
Route::get('/grooming', function () {
    return view('/service/grooming/grooming');
});
Route::get('/walking', function () {
    return view('/service/walking/walking');
});
Route::get('/breading', function () {
    return view('/service/breading/breading');
});
Route::get('/training', function () {
    return view('/service/training/training');
});
Route::get('/photography', function () {
    return view('/service/photography/photography');
});
Route::get('/pethost/pethost', function () {
    return view('pethost/pethost');
});
Route::get('/exclusive_petspaces', function () {
    return view('exclusive_petspaces/exclusive-petspaces');
});
Route::get('/house&apartment/house_apartment', function () {
    return view('house&apartment/house_apartment');
});
Route::get('/apartment', function () {
    return view('apartment/apartment');
});
Route::get('/exclusive', function () {
    return view('exclusive/exclusive');
});


require __DIR__.'/Auth.php';