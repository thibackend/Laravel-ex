<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

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


Route::get('/', [PageController::class, 'getIndex']);
Route::get('type/{id}', [PageController::class, 'getLoaiSP']);
Route::get('/detail/{id}', [PageController::class, 'getDetail']);
Route::get('lienhe', [PageController::class, 'getLienHe']);
Route::get('about', [PageController::class, 'getAbout']);

// Route::get('/',[PageController::class,'Index']);

Route::get('/admin', [App\Http\Controllers\PageController::class, 'getAdmin']);
Route::get('/admin-add-form', [App\Http\Controllers\PageController::class, 'getAdminAdd'])->name('add-product');
Route::post('/admin-add-form', [App\Http\Controllers\PageController::class, 'postAdminAdd']);
Route::get('/admin-edit-form/{id}', [App\Http\Controllers\PageController::class, 'getAdminEdit']);
Route::post('/admin-edit', [App\Http\Controllers\PageController::class, 'postAdminEdit']);




Route::get('/register', function () {
    return view('users.register');
});
Route::post('/register', [UserController::class, 'register']);

Route::get('/login', function () {
    return view('users.login');
})->name("login");
Route::post('/login', [UserController::class, "Login"]);
