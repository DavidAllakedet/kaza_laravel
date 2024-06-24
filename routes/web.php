<?php

use App\Http\Controllers\LogementController;

use Illuminate\Support\Facades\Route;


Route::get('/', [LogementController::class, 'index'])->name('index');
Route::get('/logement/{id}', [LogementController::class, 'show'])->name('logement.show');


