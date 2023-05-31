<?php

use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\AuthorController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\ResourceController;
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


Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group( function () {
    Route::get('categories', [CategoryController::class,'getAll']);
    Route::get('authors', [AuthorController::class,'getAll']);
    Route::get('resources', [ResourceController::class,'getAll']);
    Route::get('news', [NewsController::class,'getAll']);
    Route::get('articles', [ArticleController::class,'getAll']);
});
