<?php

use App\Livewire\AirportTransfers;
use App\Livewire\BookTour;
use App\Livewire\ChauffeurServices;
use App\Livewire\CorporateTransport;
use App\Livewire\Faqs;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/airport-transfers-nairobi', AirportTransfers::class)->name('services.airport-transfers');
Route::get('/chauffeur-services-nairobi', ChauffeurServices::class)->name('services.chauffeur');
Route::get('/corporate-transport-nairobi', CorporateTransport::class)->name('services.corporate');
Route::get('/faqs', Faqs::class)->name('faqs');
Route::get('/book-tour', BookTour::class)->name('book-tour');
Route::view('/privacy', 'pages.privacy')->name('privacy');
Route::view('/terms', 'pages.terms')->name('terms');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
