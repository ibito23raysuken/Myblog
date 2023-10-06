<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ArticleController;

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

Route::get('/',[MainController::class,'home'])->name('home');
Route::get('/articles',[MainController::class,'index'])->name('articles');
Route::get('/articles/{article:slug}',[MainController::class,'show'])->name('route_article');

Auth::routes();

Route::get('/admin/articles',[ArticleController::class,'index'])->middleware('admin')->name('articles.admin');
Route::get('/admin/articles/create',[ArticleController::class,'create'])->middleware('admin')->name('article.create');
Route::post('/admin/articles/store',[ArticleController::class,'store'])->middleware('admin')->name('article.store');
Route::delete('/admin/articles/{article}/delete',[ArticleController::class,'destroy'])->middleware('admin')->name('article.delete');
Route::get('/admin/articles/{article}/edit',[ArticleController::class,'edit'])->middleware('admin')->name('article.edit');
Route::put('/admin/articles/{article}/uptdate',[ArticleController::class,'update'])->middleware('admin')->name('article.update');
