<?php

use App\Http\Controllers\AdminPanel\AdminProjectController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
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

Route::get('/project/{id}',[HomeController::class, 'project'])->name('project');
Route::get('/projects',[HomeController::class, 'projects'])->name('projects');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// *****************ADMİN PANEL ROUTES**************
Route::prefix('admin')->name('admin.')->group( callback: function (){
    Route::get("/",[AdminHomeController::class,"index"])->name("index");




// *****************ADMİN CATEGORY ROUTES**************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });


// *****************ADMİN PROJECT ROUTES**************
    Route::prefix('/project')->name('project.')->controller(AdminProjectController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get("/create","create")->name("create");
        Route::post("/store","store")->name("store");
        Route::get("/edit/{id}","edit")->name("edit");
        Route::post("/update/{id}","update")->name("update");
        Route::get("/destroy/{id}","destroy")->name("destroy");
        Route::get("/show/{id}","show")->name("show");
    });

// *****************ADMİN PROJECT IMAGE GALERY ROUTES**************
  Route::prefix('/image')->name('image.')->controller(\App\Http\Controllers\AdminPanel\ImageController::class)->group(function () {
    Route::get('/{pid}', 'index')->name('index');
    Route::post('/store/{pid}','store')->name('store');
    Route::post("/update/{pid}/{id}","update")->name("update");
    Route::get('/destroy/{pid}/{id}','destroy')->name('destroy');
});
});
