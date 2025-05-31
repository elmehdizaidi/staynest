<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Property;
use App\Livewire\BookingManager;


Route::get('/', function () {
    $properties = Property::all();
    return view('welcome', compact('properties'));
});

Route::get('/booking/{property}', function (Property $property) {
    return view('booking-page', ['property' => $property]);
})->middleware('auth')->name('booking.page');

Route::get('/mes-reservations', function () {
    return view('my-bookings-page');
})->middleware('auth')->name('bookings.index');
Route::get('/dashboard', function () {
    $properties=property::all();
    return view('dashboard',compact('properties'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
