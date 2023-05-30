<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BladeController ;
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


Route::get('/',[PageController::class,'getIndex']);
Route::get('/loai-san-pham',[PageController::class,'getLoaiSP']);
Route::get('/chi-tiet-san-pham',[PageController::class,'getchitietSP']);
Route::get('/lienhe',[PageController::class,'getLienHe']);
Route::get('/about',[PageController::class,'getAbout']);

// Route::get('/',[PageController::class,'Index']);

