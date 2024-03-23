<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\MenuListController;
use App\Http\Controllers\CategoryController;

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
    return view('EndUser.mint');
});

Route::get('/dashboard', function () {
    $dashboardController = new DashboardController();
    return $dashboardController->index();

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    Route::get('/menu-lists', [MenuListController::class, 'index'])->name('menu-lists');
    Route::post('/menu-lists', [MenuListController::class, 'store'])->name('menu-lists.store');
    Route::put('/menu-lists/{id}', [MenuListController::class, 'update'])->name('menu-lists.update');
    Route::delete('/menu-lists/{id}', [MenuListController::class, 'delete'])->name('menu-lists.delete');
});

require __DIR__.'/auth.php';
