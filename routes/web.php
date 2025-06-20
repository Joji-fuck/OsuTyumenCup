<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', ['App\Http\Controllers\MainController', 'index']) -> name('home');
Route::get('/players', ['App\Http\Controllers\PlayerController', 'index']) -> name('player');
Route::get('/mappool', ['App\Http\Controllers\MappoolController', 'index']) -> name('mappool');





Route::prefix('/smallboywantschoko')->group(function(){
    Route::resource('/', 'App\Http\Controllers\CRM\CRMController');
    Route::resource('/players', 'App\Http\Controllers\CRM\PlayersController');
});
