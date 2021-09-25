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

Route::get('/', [App\Http\Controllers\home::class ,'show']);

Route::get('/poster/delete/{id}', [App\Http\Controllers\poster::class ,'delete']);
Route::get('/poster/alter/{id}', [App\Http\Controllers\poster::class ,'alter']);


Route::get('/profile/{nome}', [App\Http\Controllers\profile::class ,'profile']);

Route::get('/account/login', [App\Http\Controllers\account::class ,'login']);
Route::get('/account/logout', [App\Http\Controllers\account::class ,'logout']);
Route::post('/account/login', [App\Http\Controllers\account::class ,'auth']);

Route::get('/account/create', [App\Http\Controllers\account::class ,'create']);
Route::post('/account/create/new', [App\Http\Controllers\account::class ,'store']);

Route::get('/product', [App\Http\Controllers\poster::class ,'product']);
Route::get('/area', [App\Http\Controllers\poster::class , 'area']);
Route::post('/product/new', [App\Http\Controllers\poster::class ,'create']);
