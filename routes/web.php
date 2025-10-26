<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('bireysel-basvuru', [DocumentController::class, 'getDealer'])->name('dealer.get');
Route::post('bireysel-basvuru', [DocumentController::class, 'postDealer'])->name('dealer.post');

Route::get('kurumsal-basvuru', [DocumentController::class, 'getCorporate'])->name('corporate.get');
Route::post('kurumsal-basvuru', [DocumentController::class, 'postCorporate'])->name('corporate.post');

// Admin login routes
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.login');
    });

    Route::get('documents/{id}/view', [App\Http\Controllers\Admin\DocumentController::class, 'view'])
        ->middleware('auth:admin')
        ->name('admin.documents.view');

    Route::post('applications/{id}/status', [App\Http\Controllers\Admin\ApplicationController::class, 'updateStatus'])
        ->name('admin.applications.status');

    Route::get('login', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AuthController::class, 'login'])->name('admin.login.submit');
    Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::get('dashboard', [App\Http\Controllers\Admin\ApplicationController::class, 'index'])->name('admin.dashboard');
    Route::get('applications/bireysel', [App\Http\Controllers\Admin\ApplicationController::class, 'bireysel'])->name('admin.applications.bireysel');
    Route::get('applications/kurumsal', [App\Http\Controllers\Admin\ApplicationController::class, 'kurumsal'])->name('admin.applications.kurumsal');
});
