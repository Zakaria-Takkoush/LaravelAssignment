<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

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

Route::get('/pal', [MyController::class, 'getPalindrom'])->name("get-Palindrom");

Route::get('/time', [MyController::class, 'getSeconds'])->name("get-Seconds");

Route::get('/text', [MyController::class, 'getText'])->name("get-Text");

Route::get('/nominee', [MyController::class, 'getNominee'])->name("get-Nominee");

