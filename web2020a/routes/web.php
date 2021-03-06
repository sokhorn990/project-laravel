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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about_us',function(){
    return view('pages.about_us');
});
Route::get('/contact_us',function(){
    return view('pages.contact_us');
});
Route::get('/join_us',function(){
    return view('pages.join_us');
});
Route::get('/news',function(){
    return view('pages.news');
});
Route::get('/our_action',function(){
    return view('pages.our_action');
});
