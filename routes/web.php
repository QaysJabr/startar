<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\VerificationController;

Route::get('/', [Controller::class, 'page']);


Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'home'])->name('home')->middleware('verified');

Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

