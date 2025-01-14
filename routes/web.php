<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/show', [MainController::class, 'showPage'])->name('show');