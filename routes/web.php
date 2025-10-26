<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DocumentController;

Route::get('/', function () {
    return view('home');
});

Route::get('bireysel-basvuru', [DocumentController::class, 'getDealer'])->name('dealer.get');
Route::post('bireysel-basvuru', [DocumentController::class, 'postDealer'])->name('dealer.post');

Route::get('kurumsal-basvuru', [DocumentController::class, 'getCorporate'])->name('corporate.get');
Route::post('kurumsal-basvuru', [DocumentController::class, 'postCorporate'])->name('corporate.post');