<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComingProductController;
use App\Http\Controllers\NomenclatureController;
use App\Http\Controllers\ReceptionOfEquipmentController;
use App\Http\Controllers\TypeOfNomenclatureController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('ComingProduct')->group(function(){
    Route::get('/', [ComingProductController::class, "index"]);
    Route::post('/', [ComingProductController::class, "store"]);
    Route::put('/', [ComingProductController::class, "update"]);
    Route::delete('/', [ComingProductController::class, "destroy"]);
});

Route::prefix('Nomenclature')->group(function(){
    Route::get('/', [NomenclatureController::class, "index"]);
    Route::post('/', [NomenclatureController::class, "store"]);
    Route::put('/', [NomenclatureController::class, "update"]);
    Route::delete('/', [NomenclatureController::class, "destroy"]);
});

Route::prefix('ReceptionOfEquipment')->group(function(){
    Route::get('/', [ReceptionOfEquipmentController::class, "index"]);
    Route::post('/', [ReceptionOfEquipmentController::class, "store"]);
    Route::put('/', [ReceptionOfEquipmentController::class, "update"]);
    Route::delete('/', [ReceptionOfEquipmentController::class, "destroy"]);
});

Route::prefix('TypeOfNomenclatire')->group(function(){
    Route::get('/', [TypeOfNomenclatire::class, "index"]);
    Route::post('/', [TypeOfNomenclatire::class, "store"]);
    Route::put('/', [TypeOfNomenclatire::class, "update"]);
    Route::delete('/', [TypeOfNomenclatire::class, "destroy"]);
});

Route::prefix('User')->group(function(){
    Route::get('/', [UserController::class, "index"]);
    Route::post('/', [UserController::class, "store"]);
    Route::put('/', [UserController::class, "update"]);
    Route::delete('/', [UserController::class, "destroy"]);
});
