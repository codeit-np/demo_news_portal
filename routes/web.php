<?php

use App\Http\Controllers\Page\PageController;
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

// Route::get('/', function () {
//     return view('index');
// })->name('home');

Route::get('/', [PageController::class, 'home'])->name('home');

// Route::get("/about-us/about-company", function () {
//     return view('about');
// })->name('about');

Route::get('/category/{id}', [PageController::class, 'category'])->name('category');
// Route::get('/service', function () {
//     return view('service');
// })->name('service');

// Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/category/post/{id}', [PageController::class, 'post'])->name('post');
