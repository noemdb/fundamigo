<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

// $routeMiddleware = require base_path('routes/middleware.php');

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
    return view('home');
})->name('home');

// Route::get('/users', function () {
//     return view('users');
// })->middleware(['auth', 'role:Admin'])->name('users');

Route::group(['middleware' => ['role:Admin']], function () {
    Route::get('/users', function () {
        return view('users');
    })->name('users');
});

// Route::get('/users', function () {
//     return view('users');
// })->middleware(['auth', 'verified', 'role:Admin'])->name('users');

Route::get('/posts', function () {
    return view('posts');
})->middleware(['auth', 'verified'])->name('posts');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
