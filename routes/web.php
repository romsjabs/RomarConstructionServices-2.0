<?php

use App\Http\Controllers\AppController;
//use App\Http\Controllers\ProfileController;
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

// main pages
Route::get('/', [AppController::class, 'index'])->name('pages.index');
Route::get('/projects', [AppController::class, 'projects'])->name('pages.projects');
Route::get('/blog', [AppController::class, 'blog'])->name('pages.blog');
Route::get('/about', [AppController::class, 'about'])->name('pages.about');

// dashboard


// redirects
Route::get('/facebook', [AppController::class, 'redirectFacebook'])->name('redirect.facebook');

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
*/

require __DIR__.'/auth.php';
