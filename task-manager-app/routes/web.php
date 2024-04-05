<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskManagerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TaskManagerController::class, 'index']);

Route::post('/saveTaskRoute', [TaskManagerController::class, 'saveTask'])->name('saveTask');

Route::put('/updateTask/{id}', [TaskManagerController::class, 'updateTask'])->name('updateTask');


