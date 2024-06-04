<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Dashboard\DashboardPage;
use App\Livewire\Home\HomePage;
use App\Livewire\Tickets\SelectCardTicket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', HomePage::class)->name('home');

Route::get('/dashboard', DashboardPage::class)->name('dashboard');

Route::get('/select-tickets', SelectCardTicket::class)->name('select-tickets');

// Route::middleware('guest')->group(function () {
    Route::get('register', Register::class)->name('register');
    Route::get('login', Login::class)->name('login');
// });

Route::middleware('auth')->group(function () {
    Route::post('logout', function () {
        Auth::logout();
        return redirect('/');
    })->name('logout');

});
