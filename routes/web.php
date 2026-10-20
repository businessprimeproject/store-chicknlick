<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::get('/franchise', [HomeController::class, 'franchise'])->name('franchise');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/thank-you', [HomeController::class, 'thankYou'])->name('thank-you');
Route::post('/franchise-inquiry', [HomeController::class, 'submitInquiry'])->name('franchise.inquiry');
Route::post('/generate', [HomeController::class, 'generate'])->name('generate');
