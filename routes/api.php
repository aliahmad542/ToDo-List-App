<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(\App\Http\Controllers\Api\AuthController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});
Route::post('store-my-tasks',[\App\Http\Controllers\api\TaskController::class,'store'])->middleware('auth:sanctum');
Route::get('get-my-tasks/{id}',[\App\Http\Controllers\api\TaskController::class,'show'])->middleware('auth:sanctum');
Route::post('store-types',[\App\Http\Controllers\api\TypeController::class,'store'])->middleware('auth:sanctum');
Route::get('get-my-types',[\App\Http\Controllers\api\TypeController::class,'show'])->middleware('auth:sanctum');
Route::get('Delete-Task/{id}',[\App\Http\Controllers\api\TaskController::class,'destroy'])->name('task.delete')->middleware('auth:sanctum');
Route::get('Tasks-inprogress',[\App\Http\Controllers\api\TaskController::class,'inProgressTasks'])->middleware('auth:sanctum');
Route::get('Tasks-Ended',[\App\Http\Controllers\api\TaskController::class,'EndedTasks'])->middleware('auth:sanctum');
Route::get('All-Tasks',[\App\Http\Controllers\api\TaskController::class,'AllTasks'])->middleware('auth:sanctum');
Route::get('complete-Tasks/{id}',[\App\Http\Controllers\api\TaskController::class,'ifComplete'])->middleware('auth:sanctum');
