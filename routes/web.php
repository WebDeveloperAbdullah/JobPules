<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\VerifyTokenAllUser;
use Illuminate\Support\Facades\Route;





//show Api Route admin Panal
Route::get("/login", [DashboardController::class,"loginPage"])->name('loginPage');
Route::post('/loginCore', [UserController::class,'loginCore'])->name('loginCore');


Route::middleware(['VerifyTokenAllUser'])->group( function(){
    Route::get("/dashboard_owner", [DashboardController::class,"dashboard_owner"])->name('dashboard_owner');
    Route::get("/create_admin", [DashboardController::class,"create_admin"])->name('create_admin');
    Route::get("/admin_list", [UserController::class,"admin_list"])->name('admin_list');
    Route::get("/admin_edit_page/{id}", [UserController::class,"admin_edit_page"])->name('admin_edit_page');
    Route::get("/admin_search", [UserController::class,"search"])->name('search');
    //Route::get("/admin_edit_page/{id}", [UserController::class,"admin_edit_page"])->name('admin_edit_page');
    Route::get("/admin_active/{id}/{active}", [UserController::class,"admin_active"])->name('admin_active');
    Route::post('/create_admin_core', [UserController::class,'create'])->name('create');

});



//front end route





