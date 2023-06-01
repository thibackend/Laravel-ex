<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
Route::get('type/{id}',[PageController::class,'getLoaiSP']);
Route::get('/detail/{id}',[PageController::class,'getDetail']);
Route::get('lienhe',[PageController::class,'getLienHe']);
Route::get('about',[PageController::class,'getAbout']);

// Route::get('/',[PageController::class,'Index']);

