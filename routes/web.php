<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminInquiryController;
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

Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AdminAuthController::class, 'create'])->name('admin.login');
    Route::post('/admin/login', [AdminAuthController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('admin.login.store');
});

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::post('/logout', [AdminAuthController::class, 'destroy'])->name('logout');
    Route::get('/franchise-inquiries', [AdminInquiryController::class, 'index'])->name('inquiries.index');
    Route::get('/franchise-inquiries/export', [AdminInquiryController::class, 'export'])->name('inquiries.export');
    Route::get('/franchise-inquiries/{inquiry}', [AdminInquiryController::class, 'show'])->name('inquiries.show');
    Route::patch('/franchise-inquiries/{inquiry}', [AdminInquiryController::class, 'update'])->name('inquiries.update');
    Route::delete('/franchise-inquiries/{inquiry}', [AdminInquiryController::class, 'destroy'])->name('inquiries.destroy');
});
