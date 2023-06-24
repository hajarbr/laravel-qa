<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\TaskController;
use App\Http\Controllers\Api\V1\CompleteTaskController;

/**
 * This version is not required an authentification
 * 
 */
Route::prefix('v1')->group(function(){
    Route::apiResource('/tasks',TaskController::class);
    Route::patch('/tasks/{task}/complete',CompleteTaskController::class);
});
