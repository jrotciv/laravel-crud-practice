<?php

use App\Http\Controllers\Admin\{SupportController};
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

    Route::get('/forum/create', [SupportController::class, 'create'])->name('forum.create');
    Route::get('/forum', [SupportController::class, 'index'])->name('forum.index');
    Route::get('/forum/{id}', [SupportController::class, 'show'])->name('forum.show');
    Route::get('/forum/{id}/edit', [SupportController::class, 'edit'])->name('forum.edit');
    Route::put('/forum/{id}', [SupportController::class, 'update'])->name('forum.update');
    Route::delete('/forum/{id}', [SupportController::class, 'destroy'])->name('forum.destroy');
    Route::get('/', function () {
        return view('welcome');
    });
});

require __DIR__.'/auth.php';