<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\CreditController;
use App\Http\Controllers\RiskController;
use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('bireysel-basvuru', [DocumentController::class, 'getDealer'])->name('dealer.get');
Route::post('bireysel-basvuru', [DocumentController::class, 'postDealer'])->name('dealer.post');

Route::get('kurumsal-basvuru', [DocumentController::class, 'getCorporate'])->name('corporate.get');
Route::post('kurumsal-basvuru', [DocumentController::class, 'postCorporate'])->name('corporate.post');

Route::get('cek-analizi', [CheckController::class, 'getCheck'])->name('check.get');
Route::post('cek-analizi', [CheckController::class, 'postCheck'])->name('check.post');

Route::get('kredi-basvuru-analizi', [CreditController::class, 'getPersonalCredit'])->name('credit.personal.get');
Route::post('kredi-basvuru-analizi', [CreditController::class, 'postPersonalCredit'])->name('credit.personal.post');

Route::get('risk-analizi', [RiskController::class, 'getRiskAnalysis'])->name('risk.get');
Route::post('risk-analizi', [RiskController::class, 'postRiskAnalysis'])->name('risk.post');



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
    Route::get('basvurular/cek-analizi', [App\Http\Controllers\Admin\ApplicationController::class, 'check'])->name('admin.applications.check');
    Route::get('basvurular/kredi-analizi', [App\Http\Controllers\Admin\ApplicationController::class, 'credit'])->name('admin.applications.credit');
    Route::get('basvurular/kredi-analizi/{id}', [App\Http\Controllers\Admin\ApplicationController::class, 'creditDetail'])->name('admin.applications.credit.detail');
    Route::get('basvurular/risk-degerlendirme', [App\Http\Controllers\Admin\ApplicationController::class, 'risk'])->name('admin.applications.risk');
    Route::get('basvurular/risk-degerlendirme/{id}', [App\Http\Controllers\Admin\ApplicationController::class, 'riskDetail'])->name('admin.applications.risk.detail');

    Route::get('applications/bireysel', [App\Http\Controllers\Admin\ApplicationController::class, 'bireysel'])->name('admin.applications.bireysel');
    Route::get('applications/kurumsal', [App\Http\Controllers\Admin\ApplicationController::class, 'kurumsal'])->name('admin.applications.kurumsal');
});
