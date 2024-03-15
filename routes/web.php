<?php

use App\Http\Controllers\CompanieProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Middleware\VerifyTokenAllUser;
use Illuminate\Support\Facades\Route;





//show Api Route admin Panal
Route::get("/login", [DashboardController::class,"loginPage"])->name('loginPage');
Route::post('/loginCore', [UserController::class,'loginCore'])->name('loginCore');
Route::get('/logOut', [UserController::class,'logOut'])->name('logOut');

Route::middleware(['VerifyTokenAllUser'])->group( function(){
    Route::get("/dashboard_owner", [DashboardController::class,"dashboard_owner"])->name('dashboard_owner');
    Route::get("/dashboard_admin", [DashboardController::class,"dashboard_Admin"])->name('dashboard_Admin');
    Route::get("/dashboard_companie", [DashboardController::class,"dashboard_companie"])->name('dashboard_companie');
    Route::get("/dashboard_employe", [DashboardController::class,"dashboard_employe"])->name('dashboard_employe');
    Route::get("/dashboard_candidete", [DashboardController::class,"dashboard_candidete"])->name('dashboard_candidete');
    Route::get("/create_admin", [DashboardController::class,"create_admin"])->name('create_admin');
    Route::get("/admin_list", [UserController::class,"admin_list"])->name('admin_list');
    Route::get("/admin_details/{id}", [UserController::class,"admin_details"])->name('admin_details');
    Route::get("/user_delete/{id}", [UserController::class,"user_delete"])->name('user_delete');
    Route::get("/admin_edit_page/{id}", [UserController::class,"admin_edit_page"])->name('admin_edit_page');
    Route::get("/admin_search", [UserController::class,"search"])->name('search');
    Route::get("/owaner_profile", [UserProfileController::class,"owaner_profile"])->name('owaner_profile');
    Route::get("/owaner_update", [UserProfileController::class,"owaner_update"])->name('owaner_update');
    Route::get("/admin_profile", [UserProfileController::class,"admin_profile"])->name('admin_profile');
    Route::get("/companie_profile", [CompanieProfileController::class,"companie_profile"])->name('companie_profile');
    Route::get("/employe_profile", [UserProfileController::class,"employe_profile"])->name('employe_profile');
    Route::get("/candidate_profile", [UserProfileController::class,"candidate_profile"])->name('candidate_profile');
    //Route::get("/admin_edit_page/{id}", [UserController::class,"admin_edit_page"])->name('admin_edit_page');
    Route::get("/admin_active/{id}/{active}", [UserController::class,"admin_active"])->name('admin_active');
    Route::post('/create_admin_core', [UserController::class,'create'])->name('create');
    Route::post('/user_update', [UserController::class,'user_update'])->name('user_update');

});



//front end route





