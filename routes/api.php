<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::get('/main_menus', [App\Http\Controllers\ApiController::class, 'main_menus'])->name('main_menus');
Route::post('/createUser', [App\Http\Controllers\ApiController::class, 'createUser'])->name('createUser');

Route::get('/getPointByType', [App\Http\Controllers\ApiController::class, 'getPointByType'])->name('getPointByType');
Route::post('/createPoint', [App\Http\Controllers\ApiController::class, 'createPoint'])->name('createPoint');

Route::post('/login', [App\Http\Controllers\ApiController::class, 'login'])->name('login');


