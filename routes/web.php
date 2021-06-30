<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TopicController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/signin', [UserController::class, 'signin'])->name('admin.auth.signin');
Route::post('/admin/signin', [UserController::class, 'login'])->name('admin.auth.login');
Route::get('/admin/signin', [UserController::class, 'signout'])->name('admin.auth.signout');

Route::middleware(['auth'])->group(function () {

    Route::prefix('/admin')->group(function () {
        Route::get('/home', [HomeController::class, 'index'])->name('admin.home');
    });

    // Module User
    Route::prefix('/admin/user')->group(function () {

        // Không có quyền vào
        Route::get('/error', [UserController::class, 'error'])->name('admin.error.index');

        // Danh sách User
        Route::get('/', [UserController::class, 'index'])->name('admin.user.index');

        // Thêm User
        Route::get('/add', [UserController::class, 'add'])->name('admin.user.add');
        Route::post('/add', [UserController::class, 'create'])->name('admin.user.create');

        // Sửa User
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::post('/edit/{id}', [UserController::class, 'update'])->name('admin.user.update');

        // Xóa User
        Route::get('/delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
    });

    // Module Topic
    Route::prefix('/admin/topic')->group(function () {

        // Không có quyền vào
        Route::get('/error', [TopicController::class, 'error'])->name('admin.error.index');

        // Danh sách Topic
        Route::get('/', [TopicController::class, 'index'])->name('admin.topic.index');

        // Thêm Topic
        Route::get('/add', [TopicController::class, 'add'])->name('admin.topic.add');
        Route::post('/add', [TopicController::class, 'create'])->name('admin.topic.create');

        // Sửa Topic
        Route::get('/edit/{id}', [TopicController::class, 'edit'])->name('admin.topic.edit');
        Route::post('/edit/{id}', [TopicController::class, 'update'])->name('admin.topic.update');

        // Xóa Topic
        Route::get('/delete/{id}', [TopicController::class, 'delete'])->name('admin.topic.delete');
    });
});
