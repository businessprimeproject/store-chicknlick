<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::get('/franchise', [HomeController::class, 'franchise'])->name('franchise');
Route::get('/franchise/branch-grand-openings', [HomeController::class, 'branchGrandOpenings'])->name('franchise.branch-openings');
Route::get('/franchise/customer-moments', [HomeController::class, 'customerMoments'])->name('franchise.customer-moments');
Route::get('/franchise/video-highlights', [HomeController::class, 'videoHighlights'])->name('franchise.video-highlights');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/profit-loss', [HomeController::class, 'profitLoss'])->name('profit-loss');
Route::get('/profit-loss-statement', [HomeController::class, 'profitLossStatement'])->name('profit-loss.statement');
Route::get('/thank-you', [HomeController::class, 'thankYou'])->name('thank-you');
Route::post('/franchise-inquiry', [HomeController::class, 'submitInquiry'])->name('franchise.inquiry');
Route::post('/generate', [HomeController::class, 'generate'])->name('generate');
