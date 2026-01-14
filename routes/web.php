<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\LanjutanController;
Route::get('/dashboard', function () {
    return view('eDocument.dashboard');
})->name('dashboard');

Route::get('/approval', function () {
    return view('eDocument.approvalpage');
})->name('approval');

Route::get('/approved', function () {
    return view('eDocument.approvedDocumentView');
})->name('approved');

Route::get('/lanjutan', function () {
    return view('eDocument.lanjutan');
})->name('lanjutan');