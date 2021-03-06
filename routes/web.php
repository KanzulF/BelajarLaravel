<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentsController;
use App\Http\Controllers\navbarController;

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



Route::get('/', [ContentsController::class, 'index']);
Route::get('/show/{slug}', [navbarController::class, 'index']);

Route::view('/summary','page.showSummary');

Route::get('/move/{slug}/{id}', [ContentsController::class, 'move']);
Route::resource('contents', ContentsController::class);