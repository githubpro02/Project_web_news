<?php

use Illuminate\Support\Facades\Route;

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


use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;


// Điều hướng cho User

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/404', [HomeController::class, 'erorr404'])->name('erorrs.404');

Route::post('/tim-kiem', [HomeController::class,'search'])->name('search');
Route::get('/tin-tuc-moi-nhat', [HomeController::class,'newPost'])->name('newPost');
Route::get('/tin-nong', [HomeController::class,'hotPost'])->name('hotPost');
Route::get('/xem-nhieu-nhat', [HomeController::class,'viewPost'])->name('viewPost');

Route::get('/bai-viet', [PostsController::class, 'show'])->name('post.show');

Route::get('/gioi-thieu', AboutController::class)->name('about');

Route::get('/lien-he', [ContactController::class, 'create'])->name('contact.create');

Route::get('/chuyen-muc', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/tat-ca-chuyen-muc', [CategoryController::class, 'index'])->name('categories.index');


require __DIR__.'/auth.php';

