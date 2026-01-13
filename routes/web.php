<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApprovalController;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/approved-detail', [ApprovalController::class, 'approved']);
Route::get('/approve/{id}', [ApprovalController::class, 'approve']);
