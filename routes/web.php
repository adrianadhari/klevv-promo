<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FormController::class, 'index']);
Route::post('/', [FormController::class, 'store']);
Route::get('/viewdata', [FormController::class, 'viewData']);
Route::get('/storage/invoice/{filename}', [FormController::class, 'getInvoice'])->name('invoice.get');
