<?php

use App\Http\Controllers\admin\BedController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\admin\ShowerController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function(){
          Route::resource('city',CityController::class);
          Route::resource('bed', BedController::class);
          Route::resource('shower', ShowerController::class);
});




Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
