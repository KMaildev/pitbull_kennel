<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\DogController;
use App\Http\Controllers\Frontend\FaqController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\KennelController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('kennel', KennelController::class);
Route::resource('dog', DogController::class);
Route::resource('faq', FaqController::class);
Route::resource('contact', ContactController::class);
