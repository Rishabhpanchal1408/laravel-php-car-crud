<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\EngineController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TypeController;
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

// Get All Car Details
Route::get('/', [HomeController::class, 'index']);
// Car
// Car Get All
Route::get('/car', [CarsController::class, 'index']);

// Car Insert
Route::get('/car/create', [CarsController::class, 'create']);
// Car Get Single
Route::get('/car/{car}', [CarsController::class, 'show']);
Route::post('/car', [CarsController::class, 'store']);

// Car Update
Route::get('/car/{car}/edit', [CarsController::class, 'edit']);
Route::put('/car/{car}', [CarsController::class, 'update']);

// Car Delete
Route::delete('/car/{car}', [CarsController::class, 'destroy']);


// Brand

// Brand Get All
Route::get('/brand', [BrandController::class, 'index']);

// Brand Insert
Route::get('/brand/create', [BrandController::class, 'create']);
Route::post('/brand', [BrandController::class, 'store']);

// Brand Update
Route::get('/brand/{brand}/edit', [BrandController::class, 'edit']);
Route::put('/brand/{brand}', [BrandController::class, 'update']);

// Brand Delete
Route::delete('/brand/{brand}', [BrandController::class, 'destroy']);


// Type

// Type Get All
Route::get('/type', [TypeController::class, 'index']);

// Type Insert
Route::get('/type/create', [TypeController::class, 'create']);
Route::post('/type', [TypeController::class, 'store']);

// Type Update
Route::get('/type/{type}/edit', [TypeController::class, 'edit']);
Route::put('/type/{type}', [TypeController::class, 'update']);

// Type Delete
Route::delete('/type/{type}', [TypeController::class, 'destroy']);

// Color

// Color Get All
Route::get('/color', [ColorController::class, 'index']);

// Color Insert
Route::get('/color/create', [ColorController::class, 'create']);
Route::post('/color', [ColorController::class, 'store']);

// Color Update
Route::get('/color/{color}/edit', [ColorController::class, 'edit']);
Route::put('/color/{color}', [ColorController::class, 'update']);

// Color Delete
Route::delete('/color/{color}', [ColorController::class, 'destroy']);

// Engine

// Engine Get All
Route::get('/engine', [EngineController::class, 'index']);

// Engine Insert
Route::get('/engine/create', [EngineController::class, 'create']);
Route::post('/engine', [EngineController::class, 'store']);

// Engine Update
Route::get('/engine/{engine}/edit', [EngineController::class, 'edit']);
Route::put('/engine/{engine}', [EngineController::class, 'update']);

// Engine Delete
Route::delete('/engine/{engine}', [EngineController::class, 'destroy']);