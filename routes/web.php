<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('user',UserController::class);
Route::resource('category',CategoryController::class);
Route::resource('product',ProductController::class);
Route::resource('comment',CommentController::class);

Route::name('auth.')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('get-login');
    Route::post('post-login', [LoginController::class, 'postLogin'])->name('post-login');
    Route::get('register', [LoginController::class, 'register'])->name('register');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/', function () {
    return redirect()->route('auth.get-login');
});

