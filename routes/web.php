<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EssentialController;
use App\Http\Controllers\AppleController;
use App\Http\Controllers\StarbucksController;


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

Route::resource('/essentials',EssentialController::class);
Route::resource('/apple',AppleController::class);
Route::resource('/starbucks',StarbucksController::class);
