<?php

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\AuthController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/menus", [ApiController::class, 'getMenus']);
Route::get("/latest-news", [ApiController::class, 'getLatestNews']);
Route::get("/menu/{id}", [ApiController::class, 'getNews']);


Route::post("/register", [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get("/news/{id}", [ApiController::class, 'getNewsById']);
    Route::get("/search", [ApiController::class, 'search']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
