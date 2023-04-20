<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\EngineController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TypeController;
use App\Models\Type;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/car', [CarsController::class, 'index']);
// Brand
Route::get('/brand', [BrandController::class, 'index']);
Route::get('/brand/create', [BrandController::class, 'create']);
Route::post('/brand', [BrandController::class, 'store']);
Route::get('/brand/{brand}/edit', [BrandController::class, 'edit']);
Route::put('/brand/{brand}', [BrandController::class, 'update']);
Route::delete('/brand/{brand}', [BrandController::class, 'destroy']);
// Type
Route::get('/type', [TypeController::class, 'index']);
Route::get('/type/create', [TypeController::class, 'create']);
Route::post('/type', [TypeController::class, 'store']);
Route::get('/type/{type}/edit', [TypeController::class, 'edit']);
Route::put('/type/{type}', [TypeController::class, 'update']);
Route::delete('/type/{type}', [TypeController::class, 'destroy']);
// Color
Route::get('/color', [ColorController::class, 'index']);
Route::get('/color/create', [ColorController::class, 'create']);
Route::post('/color', [ColorController::class, 'store']);
Route::get('/color/{color}/edit', [ColorController::class, 'edit']);
Route::put('/color/{color}', [ColorController::class, 'update']);
Route::delete('/color/{color}', [ColorController::class, 'destroy']);
// Engine
Route::get('/engine', [EngineController::class, 'index']);
Route::get('/engine/create', [EngineController::class, 'create']);
Route::post('/engine', [EngineController::class, 'store']);
Route::get('/engine/{engine}/edit', [EngineController::class, 'edit']);
Route::put('/engine/{engine}', [EngineController::class, 'update']);
Route::delete('/engine/{engine}', [EngineController::class, 'destroy']);
