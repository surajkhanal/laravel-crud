<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
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

// url http://127.0.0.1:8000/articles
Route::get('/articles', 'PostController@index');

// http://127.0.0.1:8000/add-article
Route::get('/add-article', 'PostController@addPost');

Route::get('chat', [MessageController::class, 'index']);

Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');






// Route::get('/welcome', function () {
//     // return 'Hello laravel';
//     return view('welcome'); // welcome.blade.php
// });

// Route::get('/home', 'PostController@homePage');

// Route::get('/profile', 'PostController@profile');

// Route::post('/saveuser', 'PostController@saveUser');

// HTTP methods
// GET
// POST
// PUT
// PATCH
// DELETE
// OPTIONS
