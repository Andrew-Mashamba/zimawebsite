<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home-page');
});

// DISABLED - Public website only, no authentication required
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });





Route::get('welcome', function(){
    return view('frontend.home-page')
;})->name('welcome');



Route::get('about', function(){
    return view('frontend.about-page')
;})->name('about');




Route::get('service', function(){
    return view('frontend.service-page')
;})->name('service');

Route::get('our-services', function(){
    return view('frontend.our-services');
})->name('our-services');

Route::get('our-products', function(){
    return view('frontend.our-products');
})->name('our-products');

Route::get('products/{slug}', [\App\Http\Controllers\ProductController::class, 'show'])->name('products.show');

Route::get('team', function(){
    return view('frontend.team-page')
;})->name('team');


Route::get('contact', function () {
    return view('frontend.contact-page');
})->name('contact');

Route::get('ai-agents', function(){
    return view('frontend.ai-agents');
})->name('ai-agents');

Route::get('ai-agents/{slug}', [\App\Http\Controllers\AiAgentController::class, 'show'])->name('ai-agents.show');

Route::get('invest-in-tanzania', function(){
    return view('frontend.invest-in-tanzania');
})->name('invest-in-tanzania');

Route::get('financial-inclusion-initiatives', function(){
    return view('frontend.financial-inclusion-initiatives');
})->name('financial-inclusion-initiatives');

Route::get('partnership-programme', function(){
    return view('frontend.partnership-programme');
})->name('partnership-programme');

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

    Route::get('nida-integration', function () {
        return view('frontend.services.nida-integration');
    })->name('services.nida');

    Route::get('mobile-push-service', function () {
        return view('frontend.services.mobile-push-service');
    })->name('services.mobile-push');

    Route::get('sms-service', function () {
        return view('frontend.services.sms-service');
    })->name('services.sms');

    Route::get('membership-referral-system', function () {
        return view('frontend.services.membership-referral-system');
    })->name('services.membership-referral');
});

// Legal Pages
Route::get('privacy-policy', function () {
    return view('frontend.privacy-policy');
})->name('privacy-policy');

Route::get('terms-of-service', function () {
    return view('frontend.terms-of-service');
})->name('terms-of-service');

// Dynamic Sitemap (rate limited to prevent crawler abuse)
Route::get('sitemap.xml', [\App\Http\Controllers\SitemapController::class, 'index'])
    ->middleware('throttle:sitemap');

// PDF Downloads (rate limited)
Route::prefix('pdf')->middleware('throttle:downloads')->group(function () {
    Route::get('partnership-proposal', [\App\Http\Controllers\PdfController::class, 'partnershipProposal'])
        ->name('pdf.partnership-proposal');
    Route::get('partnership-proposal/view', [\App\Http\Controllers\PdfController::class, 'viewPartnershipProposal'])
        ->name('pdf.partnership-proposal.view');
    Route::get('partnership-proposal/save', [\App\Http\Controllers\PdfController::class, 'savePartnershipProposal'])
        ->name('pdf.partnership-proposal.save');
});

// Word Document Downloads (rate limited)
Route::prefix('word')->middleware('throttle:downloads')->group(function () {
    Route::get('partnership-proposal', [\App\Http\Controllers\WordController::class, 'partnershipProposal'])
        ->name('word.partnership-proposal');
});

