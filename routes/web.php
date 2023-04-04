<?php

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

Route::middleware(['auth', 'admin'])->resource('/admin/users', UserController::class)->except(['show']);


// احراز هویت

require __DIR__.'/auth.php';
