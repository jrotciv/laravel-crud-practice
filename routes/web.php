<?php

use App\Http\Controllers\Admin\{ForumController};
use App\Http\Controllers\Site\SiteController;
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

Route::get('/forum', [ForumController::class, 'index'])->name('forum.index');

Route::get('/', function () {
    return view('welcome');
});
