<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //adding this in middleware so that the routes are protected and only the authenticated users can access this route
    Route::get('/product',[ProductController::class,'index'])->name('products.index');
    Route::get('/product/create',[ProductController::class,'create'])->name('products.create');
    Route::post('/product',[ProductController::class,'store'])->name('products.store');
    Route::get('/product/{product}/edit',[ProductController::class,'edit'])->name('products.edit');
    Route::put('/product/{product}/update',[ProductController::class,'update'])->name('products.update');
    Route::delete('/product/{product}/destroy',[ProductController::class,'destroy'])->name('products.destroy');
});

require __DIR__.'/auth.php';
