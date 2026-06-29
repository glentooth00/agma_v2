<?php

use App\Http\Controllers\MembershipController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');


    Route::get('/members', [MembershipController::class, 'index'])->name('members.index');

});

require __DIR__.'/settings.php';
