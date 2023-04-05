<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('admin');

//کاربران

Route::middleware(['auth', 'admin'])->prefix('/admin')->group(function (){
    Route::resource('/users', UserController::class)->except(['show']);
    Route::resource('/categories', CategoryController::class)->except('show');
    Route::resource('/posts', PostController::class)->except('show');
});

// آپلود عکس برای ویرایشگر سی کی

Route::post('editor', [EditorController::class, 'upload'])->name('editor.upload');

// احراز هویت

require __DIR__.'/auth.php';
