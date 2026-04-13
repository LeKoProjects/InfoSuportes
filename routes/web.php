<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', HomeController::class)->name('home');
Route::get('livros/{book}/comprar', [HomeController::class, 'purchase'])->name('books.purchase');

Route::get('dashboard', function () {
    return Inertia::render('Admin/Dashboard', [
        'categoryCount' => Category::query()->count(),
        'bookCount' => Book::query()->count(),
        'featuredBookCount' => Book::query()->where('is_featured', true)->count(),
    ]);
})->middleware(['auth'])->name('dashboard');

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function (): void {
    Route::get('/', function () {
        return to_route('dashboard');
    })->name('index');

    Route::resource('categories', CategoryController::class)->except(['show', 'create', 'edit']);
    Route::resource('books', BookController::class)->except(['show', 'create', 'edit']);
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
