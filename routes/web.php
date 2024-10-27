<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Artisan;
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
});

Route::get('/berita', [PostController::class, 'lihat'])->name('posts.lihat');
Route::resource('books', BookController::class)->middleware('auth');

Route::get('/migrate-fresh', function () {
    Artisan::call('migrate:fresh --seed');
    return response()->json([
        'message' => 'Migration and seeding completed.'
    ]);
});

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return response()->json([
        'message' => 'Storage link completed.'
    ]);
});

Route::get('/clear-cache', function () {
    Artisan::call('dump-autoload');
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return response()->json([
        'message' => 'Cache cleared and configurations reset.'
    ]);
});

require __DIR__.'/auth.php';
