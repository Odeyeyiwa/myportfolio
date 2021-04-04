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

Route::get('/', 'portfolio@loadPage');
Route::POST('/submitcontact', 'portfolio@saveMessage');
Route::POST('/submitservice', 'portfolio@saveService');
Route::get('/admin', 'portfolio@viewContact')->middleware('auth');
Route::get('/add', 'portfolio@viewService')->middleware('auth');

Auth::routes();
// Route::get('/',function (){
//     return view('welcome');
// });
Route::get('/home', 'HomeController@index')->name('home');
