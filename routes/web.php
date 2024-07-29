<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarrosController;
use App\Http\Controllers\CategoryController;


Route::get('/', function () {
    // return view('welcome');
    return "Bienvenidos al curso de Laravel";
});

Route::get('/cars', [CarrosController::class, 'index'])->name('carss');
Route::get('/cars/create', [CarrosController::class,'create'])->name('carsCreate');
Route::get('/cars/{name_carros}/{categoria?}', [CarrosController::class, 'help']);
Route::post('/cars/storeCarros', [CarrosController::class, 'storeCarros'])->name('createCarros');

Route::get('/view/{carro_id}', [CarrosController::class,'view'])->name('viewCars');

Route::post('/cars/updateCarros', [CarrosController::class, 'updateCarros'])->name('updateCarros');

Route::get('/delete/{carro_id}', [CarrosController::class,'delete'])->name('deleteCars');



Route::resource('categories', CategoryController::class);



