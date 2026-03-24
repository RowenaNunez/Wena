<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/students', [StudentController::class, 'show']);
Route::post('/students', [StudentController::class, 'create']);
Route::delete('/students/{id}', [StudentController::class, 'delete']);
Route::put('/students/{id}', [StudentController::class, 'update']);
