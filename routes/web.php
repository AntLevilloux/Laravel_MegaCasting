<?php

use App\Http\Controllers\CastingController;
use App\Http\Controllers\DescriptionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Descriptor\Descriptor;
use App\Http\Controllers\PostulationController;

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
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/casting', CastingController::class);

Route::get('/postule', [CastingController::class, 'postule'])->name('casting.postule');

Route::post('/casting/postule', [CastingController::class, 'store'])->name('postulation.store');

// Route::get('/casting/{description}', [CastingController::class, 'show'])->name('casting');

require __DIR__.'/auth.php';
