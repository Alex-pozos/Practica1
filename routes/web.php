<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JefesController;
use App\Http\Controllers\Kof2000Controller;
use App\Http\Controllers\Kof2001Controller;
use App\Http\Controllers\Kof2002Controller;
use App\Http\Controllers\Kof2003Controller;
use App\Http\Controllers\Kof97Controller;
use App\Http\Controllers\Kof98Controller;
use App\Http\Controllers\Kof99Controller;
use App\Http\Controllers\PersonajesController;
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

Route::get('/', HomeController::class);
Route::get('/kof97', [Kof97Controller::class,'kof97']);
Route::get('/kof98', [Kof98Controller::class,'kof98']);
Route::get('/kof99', [Kof99Controller::class,'kof99']);
Route::get('/kof2000', [Kof2000Controller::class,'kof2000']);
Route::get('/kof2001', [Kof2001Controller::class,'kof2001']);
Route::get('/kof2002', [Kof2002Controller::class,'kof2002']);
Route::get('/kof2003', [Kof2003Controller::class,'kof2003']);
Route::get('/jefes', [JefesController::class,'jefes']);
Route::get('/personajes', [PersonajesController::class,'personajes']);

