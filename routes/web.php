<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');




Route::get('/home', [StudentController::class, 'index'])->name('home');

Route::get('/students/create', [StudentController::class, 'create']);

Route::post('/students', [StudentController::class, 'store']);

Route::get('/admins/create', [AdminController::class, 'create']);

Route::post('/admins', [AdminController::class, 'store']);

Route::get('/admins/{admin}/edit', [AdminController::class, 'edit']);

Route::put('/admins/{admin}', [AdminController::class, 'update']);

Route::delete('/admins/{admin}', [AdminController::class, 'destroy']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
