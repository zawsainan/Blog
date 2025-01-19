<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/",[ArticleController::class,'index']);
Route::get("/articles",[ArticleController::class,'index']);

Route::get("/articles/detail/{id}",[ArticleController::class,"detail"]);
Route::get("/articles/delete/{id}",[ArticleController::class,'delete']);

Route::get("/articles/edit/{id}",[ArticleController::class,'edit']);
Route::post("/articles/edit/{id}",[ArticleController::class,'update']);

Route::get("/articles/add",[ArticleController::class,'add']);
Route::post("/articles/add",[ArticleController::class,'create']);