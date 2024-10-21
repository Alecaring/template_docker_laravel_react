<?php

use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

    Route::get('/Products', [ProductPageController::class, 'index'])->name('product.index');
    Route::get('/products_create', [ProductPageController::class, 'createProduct'])->name('product.create');
    Route::post('/products_store', [ProductPageController::class, 'storeProduct'])->name('product.store');
    Route::get('/products_edit/{id}', [ProductPageController::class, 'editProduct'])->name('product.edit');
    Route::put('/products_update/{id}', [ProductPageController::class, 'updateProduct'])->name('product.update');

});

require __DIR__.'/auth.php';
