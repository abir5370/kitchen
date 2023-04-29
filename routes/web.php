<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SliderContrller;
Use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\ReservationController;


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

Route::get('/',[FrontendController::class,'index'])->name('index');
Route::post('/',[FrontendController::class,'index'])->name('index');


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

    Route::resource('slider',SliderContrller::class);
    Route::get('slider/status/{id}',[SliderContrller::class,'sliderStatus'])->name('slider.status');
    //category
    Route::resource('category',CategoryController::class);
    Route::get('category/status/{id}',[CategoryController::class,'categoryStatus'])->name('category.status');
    //Item
    Route::resource('item',ItemController::class);

});
