<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::view('/home', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');