<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Action-синтаксис (не забудьте импортировать класс контроллера)
use App\Http\Controllers\MainController;

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

Route::get('/', [ MainController::class, 'home' ]);

Route::get('/about', [ MainController::class, 'about' ]);

Route::get('/reviews', [ MainController::class, 'reviews' ])->name('reviews');

Route::get('/reviews/{id}', [ MainController::class, 'reviews_one' ])->name('reviews_one');

Route::get('/reviews/{id}/edit}', [ MainController::class, 'reviews_edit' ])->name('reviews-edit');
Route::post('/reviews/{id}/edit}', [ MainController::class, 'reviews_check_submit' ])->name('reviews-edit_submit');

Route::get('/reviews/{id}/delete}', [ MainController::class, 'deleteReviews' ])->name('reviews-delete');

Route::post('/reviews/check', [ MainController::class, 'reviews_check' ]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [HomeController::class, 'index'])->middleware(['auth', 'admin'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';