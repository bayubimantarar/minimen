<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClaimController;

Route::post('claim', [ClaimController::class, 'store'])->name('claim.store');
Route::patch('claim', [ClaimController::class, 'update'])->name('claim.update');
Route::delete('claim/{id}', [ClaimController::class, 'destroy'])->name('claim.delete');

// Get Jenis by Merk ID
Route::get('data/{merk}', [ClaimController::class, 'getJenisByMerkID']);