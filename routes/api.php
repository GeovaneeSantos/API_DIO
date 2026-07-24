<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\BandController;

Route::prefix("v1")->group(function(){
    Route::get('bands', [BandController::class,"getAll"]);

    Route::get('bands/{id}', [BandController::class, "getByID"]);

    Route::get('bands/gender/{gender}', [BandController::class, "getByGender"]);

    Route::get('bands/name/{name}', [BandController::class, "getByName"]);

    Route::post('bands/store', [BandController::class, "store"]);

    });


