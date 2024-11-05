<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use App\Livewire\PostCreate;

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


Route::group(['middleware' => ['verified']], function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group(['middleware' => ['role:Admin']], function () {
        
        Route::get('/users', function () {
            return view('users');
        })->name('users');
    
        Route::get('/posts', function () {
            return view('posts');
        })->name('posts');

        Route::get('/posts/create', PostCreate::class)->name('posts.create');

    });

});


require __DIR__.'/auth.php';
