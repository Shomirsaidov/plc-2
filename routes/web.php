<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;


Auth::routes();

Route::get('/', [CarController::class, 'for_index'])->name('welcome');


Route::get('/delivery', function() {
    return view('delivery');
});
Route::get('/customs-clearance', function() {
    return view('customs');
});
Route::get('/certification', function() {
    return view('cert');
});
Route::get('/franchise', function() {
    return view('franchise');
});


Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
Route::post('/add-car-script', [CarController::class, 'store'])->name('cars.store');
Route::post('/autos/filtered', [CarController::class, 'filterCars'])->name('cars.filtered');
Route::post('/make-order', [CarController::class, 'order'])->name('cars.order');
Route::get('/autos/{vin}', [CarController::class, 'show'])->name('cars.show');
Route::get('/autos/edit/{id}', [CarController::class, 'editForm'])->name('cars.edit-form');
Route::post('/autos/edit', [CarController::class, 'edit'])->name('cars.edit');
Route::get('/autos', [CarController::class, 'no_filter'])->name('cars.no-filter');
Route::get('/china', [CarController::class, 'china_no_filter'])->name('cars.china-no-filter');
Route::post('/china/filtered', [CarController::class, 'china_filtered'])->name('cars.china-filtered');
Route::get('/search', [CarController::class, 'search'])->name('cars.search');

Route::get('/sitemap.xml', function () {
    $cars = \App\Models\Car::all();
    return response()->view('sitemap', compact('cars'))->header('Content-Type', 'application/xml');
});


