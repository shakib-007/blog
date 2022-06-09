<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
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

Route::get('/', [PagesController::class,'index'])->name('in');

Route::get('/abouts', [PagesController::class,'abouts']);

Route::get('/services', [PagesController::class,'services']);



Route::get('/posts', [PostsController::class,'index']);
Route::get('/posts/{id}', [PostsController::class,'show']);

Route::get('/about/{id}', function ($id) {
    return $id;
});

Route::get('/create', [PostsController::class,'create']);
Route::post('/store', [PostsController::class,'store']);

Route::get('/edit/{id}', [PostsController::class,'edit']);
Route::post('/update/{id}', [PostsController::class,'update']);
