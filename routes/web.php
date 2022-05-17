<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
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
//1-Do Something In Route
Route::get('/hello', function () {
    return 'Hello World';
});
//2-Call View In Route
Route::get('/welcome', function () {
    return view('welcome');
});
//3-Call Controller Function
Route::get("/",[HomeController::class,"index"])->name("home");

//4-Route-> Controller-> View
Route::get('/test',[HomeController::class,'test'])->name('test');

//5-Route With Parameters

Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name('param');

//6-Route With Post
Route::post('/save',[HomeController::class,'save'])->name('save');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
// *****************ADMİN PANEL ROUTES**************
Route::get("/admin",[AdminHomeController::class,"index"])->name("admin");

// *****************ADMİN CATEGORY ROUTES**************
Route::get("/admin/category",[\App\Http\Controllers\AdminPanel\CategoryController::class,"index"])->name("admin_category");
Route::get("/admin/category/create",[\App\Http\Controllers\AdminPanel\CategoryController::class,"create"])->name("admin_category_create");
