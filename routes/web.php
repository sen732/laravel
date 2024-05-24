<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SanitationFacilityController;
use App\Http\Controllers\WaterSourceController;
 
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    
        Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::resource('sanitation-facilities', SanitationFacilityController::class);
        Route::resource('water-sources', WaterSourceController::class);


});

require __DIR__.'/auth.php';