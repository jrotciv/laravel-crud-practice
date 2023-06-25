<?php

use App\Http\Controllers\Admin\{SupportController};
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

Route::post('/forum/store', [SupportController::class, 'store'])->name('forum.store');

Route::get('/forum/create', [SupportController::class, 'create'])->name('forum.create');

Route::get('/forum', [SupportController::class, 'index'])->name('forum.index');

Route::get('/forum/{id}', [SupportController::class, 'show'])->name('forum.show');

Route::get('/forum/{id}/edit', [SupportController::class, 'edit'])->name('forum.edit');

Route::put('/forum/{id}', [SupportController::class, 'update'])->name('forum.update');

Route::get('/', function () {
    return view('welcome');
});
