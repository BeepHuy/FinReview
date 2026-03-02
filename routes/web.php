<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

// Trang chủ
Route::get('/', [HomeController::class, 'index'])->name('home');

// Static pages
Route::get('/get-started',    [PageController::class, 'getStarted'])->name('get-started');
Route::get('/consultation',   [PageController::class, 'consultation'])->name('consultation');
Route::get('/search',         [PageController::class, 'search'])->name('search');
Route::get('/reviews',        [PageController::class, 'reviews'])->name('reviews');

// Category pages
Route::get('/insurance',        [PageController::class, 'insurance'])->name('insurance');
Route::get('/banking',          [PageController::class, 'banking'])->name('banking');
Route::get('/credit-cards',     [PageController::class, 'creditCards'])->name('credit-cards');
Route::get('/mortgages',        [PageController::class, 'mortgages'])->name('mortgages');
Route::get('/personal-finance', [PageController::class, 'personalFinance'])->name('personal-finance');

// Article detail pages
Route::get('/articles/fed-rate-decision-2026',         [PageController::class, 'articleFedRate'])->name('article.fed-rate');
Route::get('/articles/emergency-fund-vs-savings-2026', [PageController::class, 'articleEmergencyFund'])->name('article.emergency-fund');
Route::get('/articles/home-insurance-premiums-2026',   [PageController::class, 'articleHomeInsurance'])->name('article.home-insurance');

// Insurance Fundamentals sub-pages
Route::get('/insurance/fundamentals/principles',          [PageController::class, 'insurancePrinciples'])->name('insurance.principles');
Route::get('/insurance/fundamentals/risk-assessment',     [PageController::class, 'insuranceRiskAssessment'])->name('insurance.risk-assessment');
Route::get('/insurance/fundamentals/underwriting',        [PageController::class, 'insuranceUnderwriting'])->name('insurance.underwriting');
Route::get('/insurance/fundamentals/premium-calculation', [PageController::class, 'insurancePremiumCalculation'])->name('insurance.premium-calculation');
Route::get('/insurance/fundamentals/regulatory',          [PageController::class, 'insuranceRegulatory'])->name('insurance.regulatory');