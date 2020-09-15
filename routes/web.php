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
    return view('welcome');
});

//  to view
Route::get('/home', function () {
    return view('home');
});
Route::get('/breakfast', function(){
    return view('sarapan-pagi');
});
Route::get('/search', function(){
    return view('search');
});
Route::get('/cart', function(){
    return view('cart');
});
Route::get('/admin', function(){
    return view('admin');
});

Route::get('/breakfastMenu', 'pagiControllerAdmin@index');
Route::post('/breakfastMenu/create', 'pagiControllerAdmin@create');
Route::get('/breakfastMenu/{id}/edit', 'pagiControllerAdmin@edit');
Route::post('/breakfastMenu/{id}/update', 'pagiControllerAdmin@update');
Route::get('breakfastMenu/{id}/delete', 'pagiControllerAdmin@delete');


Route::get('/cartItem', 'cartControllerAdmin@index');
Route::post('/cartItem/create', 'cartControllerAdmin@create');
Route::get('/cartItem/{id}/edit', 'cartControllerAdmin@edit');
Route::post('/cartItem/{id}/update', 'cartControllerAdmin@update');
Route::get('/cartItem/{id}/delete', 'cartControllerAdmin@delete');
