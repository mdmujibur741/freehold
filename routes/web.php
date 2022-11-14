<?php

use App\Http\Controllers\admin\AgentController;
use App\Http\Controllers\admin\BedController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\admin\RoadController;
use App\Http\Controllers\admin\ShowerController;
use App\Http\Controllers\admin\StatusController;
use App\Http\Controllers\admin\ZipCodeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function(){
          Route::resource('city',CityController::class);
          Route::resource('bed', BedController::class);
          Route::resource('shower', ShowerController::class);
          Route::resource('road',RoadController::class);
          Route::resource('zipCode', ZipCodeController::class);
          Route::resource('status', StatusController::class);
          Route::resource('agent',AgentController::class);
});




Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
