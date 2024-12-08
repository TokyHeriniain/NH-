<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
//use App\Http\Middleware\AdminMiddleware;

// Public Routes
Route::get('/', [AuthController::class, 'login']);
Route::post('/', [AuthController::class, 'auth_login']);
Route::get('forgot', [AuthController::class, 'forgot']);
Route::post('login_post', [AuthController::class, 'login_post']);
Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

