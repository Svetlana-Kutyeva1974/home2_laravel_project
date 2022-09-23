<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [\App\Http\Controllers\ToDoController::class, 'index']);
Route::get('/todo', [\App\Http\Controllers\ToDoController::class, 'index']);
//Route::get('/todo/create', [\App\Http\Controllers\ToDoController::class, 'index']);
Route::get('/example', [\App\Http\Controllers\ToDoController::class, 'show']);
//Route::get('/todos/{id}', [\App\Http\Controllers\TodoController::class, 'find']);
