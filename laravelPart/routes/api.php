<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\StateController;



Route::post('/', [TaskController::class, 'create']);
Route::get('/', [StateController::class, 'getStates']);
Route::put('/{id}', [TaskController::class, 'updateLikes']);
Route::delete('/{id}', [TaskController::class, 'deleteTask']);

Route::get('/{criteria}', [TaskController::class, 'getTasks']);
