<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\CommentController as AdminCommentController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;


Route::get('/login', function () {
    return view('welcome');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Public routes
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
    Route::get('/blog/{post:slug}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/category/{category:slug}', [CategoryController::class, 'show'])->name('categories.show');
    Route::post('/blog/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::get('/search', [SearchController::class, 'index'])->name('search');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::middleware('auth')->group(function () {
    Route::resource('admin/posts', AdminPostController::class)->names('admin.posts');
    Route::resource('admin/categories', AdminCategoryController::class)->names('admin.categories');
    Route::resource('admin/tags', TagController::class)->names('admin.tags');
    Route::get('/admin/comments', [AdminCommentController::class, 'index'])->name('admin.comments.index');
    Route::put('/admin/comments/{comment}', [AdminCommentController::class, 'update'])->name('admin.comments.update');
    Route::delete('/admin/comments/{comment}', [AdminCommentController::class, 'destroy'])->name('admin.comments.destroy');
});

// Forge-generated routes will be added below this line


// Auth route stubs (prevents RoutingException in generated views)
Route::get('/register', function () { return redirect('/'); })->name('register');
