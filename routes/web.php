<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home-page');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});





Route::get('welcome', function(){
    return view('frontend.home-page')
;})->name('welcome');



Route::get('about', function(){
    return view('frontend.about-page')
;})->name('about');




Route::get('service', function(){
    return view('frontend.service-page')
;})->name('service');


Route::get('team', function(){
    return view('frontend.team-page')
;})->name('team');


Route::get('contact', function(){
    return view('frontend.contact-page')
;})->name('contact');

// Service Landing Pages
Route::prefix('services')->group(function () {
    Route::get('rtgs-integration', function () {
        return view('frontend.services.rtgs-integration');
    })->name('services.rtgs');

    Route::get('tips-integration', function () {
        return view('frontend.services.tips-integration');
    })->name('services.tips');

    Route::get('gepg-gateway', function () {
        return view('frontend.services.gepg-gateway');
    })->name('services.gepg');

    Route::get('api-gateway', function () {
        return view('frontend.services.api-gateway');
    })->name('services.api');

    Route::get('loan-management', function () {
        return view('frontend.services.loan-management');
    })->name('services.loan');
});

// Legal Pages
Route::get('privacy-policy', function () {
    return view('frontend.privacy-policy');
})->name('privacy-policy');

Route::get('terms-of-service', function () {
    return view('frontend.terms-of-service');
})->name('terms-of-service');

// Dynamic Sitemap
Route::get('sitemap.xml', [\App\Http\Controllers\SitemapController::class, 'index']);

