<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ClientUIController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\MenuListController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\CartController;

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
    $clientUiController = new ClientUIController();
    return $clientUiController->index();
});

Route::get('/dashboard', function () {
    $dashboardController = new DashboardController();
    return $dashboardController->index();

})->middleware(['auth', 'verified', 'deactivated'])->name('dashboard');


Route::post('/addcart/{id}', [ClientUiController::class, 'addcart']);
Route::delete('/cart/{id}', [CartController::class, 'delete'])->name('cart.delete');


Route::middleware(['auth', 'deactivated'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    Route::get('/menu', [MenuListController::class, 'index'])->name('menu-lists');
    Route::post('/menu', [MenuListController::class, 'store'])->name('menu-lists.store');
    Route::put('/menu/{id}', [MenuListController::class, 'update'])->name('menu-lists.update');
    Route::delete('/menu/{id}', [MenuListController::class, 'delete'])->name('menu-lists.delete');

    Route::get('/order', [OrderController::class, 'index'])->name('order');
    Route::put('/order/{id}', [OrderController::class, 'update'])->name('order.update');
    Route::post('/orders', [OrderController::class, 'show'])->name('orders.show');
    Route::delete('/order/{id}', [OrderController::class, 'delete'])->name('order.delete');

});

Route::middleware(['auth', 'admin','deactivated'])->group(function () {
    // Routes accessible only to administrators...

    Route::get('/staff', [StaffController::class, 'index'])->name('staff-lists');
    Route::post('/staff', [StaffController::class, 'store'])->name('staff-lists.store');
    Route::put('/staff/{id}', [StaffController::class, 'update'])->name('staff-lists.update');
    Route::delete('/staff/{id}', [StaffController::class, 'delete'])->name('staff-lists.delete');

    Route::get('/role', [RolesController::class, 'index'])->name('role');


});

require __DIR__.'/auth.php';
