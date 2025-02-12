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

