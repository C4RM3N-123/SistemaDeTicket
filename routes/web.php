<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;

use App\Http\Controllers\UserController;

Route::get('/', [IndexController::class, 'actionIndex']);
Route::get('user/edit', [UserController::class, 'actionEditar']);
Route::get('user/escribir', [UserController::class, 'actionEscribir']);
Route::get('user/login', [UserController::class, 'actionLoguear']);
Route::get('user/estado', [UserController::class, 'actionEstado']);