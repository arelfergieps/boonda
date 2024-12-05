<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ImageController;
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

Route::get('/', [UserController::class,'userview'])->name('user.index');
Route::get('/detailcard', [UserController::class,'detailcard'])->name('user.detailcard');
Route::get('/galleri', [UserController::class,'galleri'])->name('user.galleri');
Route::get('/katalog', [UserController::class,'katalog'])->name('user.katalog');
Route::get('/kolaborator', [UserController::class,'kolaborator'])->name('user.kolaborator');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', [ImageController::class, 'index'])->name('admin.dashboard');
    //CRUD BERITA
    Route::get('/imagesview', [ImageController::class, 'index'])->name('images.index');
    Route::get('/images_create', [ImageController::class, 'create'])->name('images.create');
    Route::post('/images_store', [ImageController::class, 'store'])->name('images.store');
    Route::get('/images_edit/{id}', [ImageController::class, 'edit'])->name('images.edit');
    Route::post('/images_update/{id}', [ImageController::class, 'update'])->name('images.update');
    Route::delete('/imagesdelete/{id}', [ImageController::class, 'destroy'])->name('images.delete');
});














Route::get('/auth/logout', [AuthController::class, 'logout'])->name('admin.logout')->middleware('auth');