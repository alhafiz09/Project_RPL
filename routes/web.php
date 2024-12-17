<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});
Route::get('home',[HomeController::class,'index'])->name('home');

Route::get('lapor',[HomeController::class,'lapor'])->name('lapor');

Route::get('cara',[HomeController::class,'cara'])->name('cara');

Route::get('profildinas',[HomeController::class,'profildinas'])->name('profildinas');

Route::get('faq',[HomeController::class,'faq'])->name('faq');

Route::get('bantuan',[HomeController::class,'bantuan'])->name('bantuan');

Route::get('kontak',[HomeController::class,'kontak'])->name('kontak');
