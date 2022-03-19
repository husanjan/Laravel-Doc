<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\MainController;
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

 Route::get('/',[HomeController::class, 'index'])->name('home');

 Route::get('/create',[HomeController::class, 'create'])->name('posts.create');

 Route::post('/',[HomeController::class,'store'])->name('posts.store');
 Route::get('/page/about',[PageController::class, 'show'])->name('page.about');
// Route::get('/send',[ContactController::class,'send']);

 Route::match(['get','post'],'/send',[ContactController::class,'send']);

Route::group(['middleware'=>'guest'],function (){


    Route::get('/admin/register',[UserController::class,'create'])->name('register.create');
    Route::post('/admin/register',[UserController::class,'store'])->name('register.store');
    Route::get('/admin/login',[UserController::class,'loginForm'])->name('login.create');

    Route::post('/admin/login',[UserController::class,'login'])->name('login.create');
});





Route::get('/logout',[UserController::class,'logout'])->name('lagout')->middleware('auth');
Route::group(['middleware'=>'admin','prefix'=>'admin','namespace'=>'Admin'],function (){
    Route::get('/',[MainController::class,'index'])->middleware('admin');

});











