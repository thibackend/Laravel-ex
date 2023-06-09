<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

										
// Route::middleware('auth:api')->get('/user', function (Request $request) {									
// 	return $request->user();									
// 	});									
										
	// // create api									
	// Route::get('/get-product',[APIController::class,'getProducts']);									
										
										
										
	// Route::get('/get-product/{id}', [APIController::class,'getOneProduct']);									
	// Route::post('/add-product',[APIController::class,'addProduct']);									
	// Route::delete('/delete-product/{id}',[APIController::class,'deleteProduct']);									
	// Route::put('/edit-product/{id}',[APIController::class,'editProduct']);									
										
	// Route::post('/upload-image',[APIController::class,'uploadImage']);									
										

	Route::get("/products",[ProductController::class,"index"]);
	Route::get("/products/{id}",[ProductController::class,"getOne"]);
	Route::post("/products",[ProductController::class,"store"]);
	Route::put("/products/{id}",[ProductController::class,"update"]);
	Route::delete("/products/{id}",[ProductController::class,"delete"]);
	