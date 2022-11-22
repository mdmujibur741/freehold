<?php

use App\Http\Controllers\admin\AgentController;
use App\Http\Controllers\admin\BedController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\PropertyController;
use App\Http\Controllers\admin\RoadController;
use App\Http\Controllers\admin\ShowerController;
use App\Http\Controllers\admin\StatusController;
use App\Http\Controllers\admin\ZipCodeController;
use App\Http\Controllers\frontendController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


//  DASHBOARD ROUTE
Route::get('/dashboard', [dashboardController::class,'index'])->name('dashboard');
// ADMIN BACKEND ROUTE
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function(){
        
          Route::resource('city',CityController::class);
          Route::resource('bed', BedController::class);
          Route::resource('shower', ShowerController::class);
          Route::resource('road',RoadController::class);
          Route::resource('zipCode', ZipCodeController::class);
          Route::resource('status', StatusController::class);
          Route::resource('agent',AgentController::class);
          Route::resource('property', PropertyController::class);
});


// Frontend Route
Route::get('/',[frontendController::class,'index'])->name('web.home');
Route::get('/properties', [frontendController::class,'properties'])->name('web.properties');
Route::get('/property', [frontendController::class,'single'])->name('web.property');
Route::get('/contact', [frontendController::class,'contact'])->name('web.contact');



require __DIR__.'/auth.php';
