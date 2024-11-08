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

use App\Http\Controllers\AdminControllers\DashboardController;
use App\Http\Controllers\AdminControllers\AdminRolesController;
use App\Http\Controllers\AdminControllers\AdminCategoriesController;
use App\Http\Controllers\AdminControllers\AdminUsersController;
use App\Http\Controllers\AdminControllers\AdminPostsController;
use App\Http\Controllers\AdminControllers\AdminTagsController;
use App\Http\Controllers\AdminControllers\AdminCommentsController;
use App\Http\Controllers\AdminControllers\TinyMCEController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;


// Điều hướng cho User

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/404', [HomeController::class, 'erorr404'])->name('erorrs.404');

Route::post('/tim-kiem', [HomeController::class,'search'])->name('search');
Route::get('/tin-tuc-moi-nhat', [HomeController::class,'newPost'])->name('newPost');
Route::get('/tin-nong', [HomeController::class,'hotPost'])->name('hotPost');
Route::get('/xem-nhieu-nhat', [HomeController::class,'viewPost'])->name('viewPost');

Route::get('/bai-viet/{post:slug}', [PostsController::class, 'show'])->name('posts.show');
Route::post('/bai-viet/{post:slug}', [PostsController::class, 'addComment'])->name('posts.add_comment');
Route::post('/binh-luan', [PostsController::class, 'addCommentUser'])->name('posts.addCommentUser');

Route::get('/gioi-thieu', AboutController::class)->name('about');

Route::get('/lien-he', [ContactController::class, 'create'])->name('contact.create');

Route::get('/chuyen-muc/{category:slug}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/tat-ca-chuyen-muc', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/tu-khoa/{tag:name}', [TagController::class, 'show'])->name('tags.show');


require __DIR__.'/auth.php';


// Điều hướng cho trang quản trị admin -
Route::prefix('admin')->name('admin.')->middleware(['auth', \App\Http\Middleware\CheckPermission::class])->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::post('upload_tinymce_image', [TinyMCEController::class, 'upload_tinymce_image'])->name('upload_tinymce_image');

    Route::resource('roles', AdminRolesController::class)->except('show');
    Route::resource('users', AdminUsersController::class);

    Route::resource('posts', AdminPostsController::class);
    Route::post('/poststitle', [AdminPostsController::class, 'to_slug'])->name('posts.to_slug');
    Route::resource('categories', AdminCategoriesController::class);
    Route::resource('tags', AdminTagsController::class)->only(['index','show','destroy']);
    Route::resource('comments', AdminCommentsController::class)->except('show');
});

