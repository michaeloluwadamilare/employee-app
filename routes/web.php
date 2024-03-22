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
    Route::get('/menu', [MenuListController::class, 'index'])->name('menu');

});

// Route::get('/menu', function() {
//     return view('admin.menu');
// });

// Route::get('/menu', function () {
//     $menuListController = new MenuListController();
//     return $menuListController->index();
// });

require __DIR__.'/auth.php';
