<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostCtroller;
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
    return view('pages.guest.welcome');
})->name('guest.home');

Route::get('/dashboard', [App\Http\Controllers\Admin\AdminHomeController::class, 'index'])->middleware(['auth', 'verified', 'isAdmin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\Admin\AdminHomeController::class, 'index'])->name('home')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/admin/home', [AdminHomeController::class, 'index']);
});

Route::middleware('auth', 'isAdmin')->group(function () {
    Route::prefix('cms')->group(function () {
        Route::get('/', [PostCtroller::class, 'index'])->name('admin.cms.overview');
        Route::get('/category', [CategoryController::class, 'index'])->name('admin.cms.category');
        Route::post('datatable', [CategoryController::class, 'datatable'])->name('admin.cms.category.datatable');
        Route::post('/category', [CategoryController::class, 'store'])->name('admin.cms.category.create');
    });
});
