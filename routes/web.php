<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    //return view('dashboard');
    $dashboardController = new DashboardController();
    return $dashboardController->index();
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/employee', [EmployeeController::class, 'index'])->name('employee-lists');
Route::post('/employee', [EmployeeController::class, 'store'])->name('employee-lists.store');
Route::put('/employee/{id}', [EmployeeController::class, 'update'])->name('employee-lists.update');
Route::get('/employee/{id}', [EmployeeController::class, 'show'])->name('employee-lists.show');
Route::delete('/employee/{id}', [EmployeeController::class, 'destroy'])->name('employee-lists.destroy');

Route::get('/role', [RoleController::class, 'index'])->name('role');
Route::post('/role', [RoleController::class, 'store'])->name('role.store');
Route::put('/role/{id}', [RoleController::class, 'update'])->name('role.update');
Route::get('/role/{id}', [RoleController::class, 'show'])->name('employee-lists.show');
Route::delete('/role/{id}', [RoleController::class, 'destroy'])->name('employee-lists.destroy');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';
