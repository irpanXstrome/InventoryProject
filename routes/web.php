<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataBarangController;
use App\Http\Controllers\PeminjamanController;
use Illuminate\Support\Facades\Route;

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

Route::redirect("/","/dashboard");

Route::get("/dashboard",[DashboardController::class,"index"])->middleware("auth");
Route::get("/barang",[DataBarangController::class,"index"])->middleware("auth");
Route::post("/barang/delete",[DataBarangController::class,"delete"])->middleware("auth");
Route::get("/barang/add",[DataBarangController::class,"addIndex"])->middleware("auth");
Route::post("/barang/add",[DataBarangController::class,"add"])->middleware("auth");
Route::get("/barang/edit/{id_barang}",[DataBarangController::class,"modifyIndex"])->middleware("auth");
Route::post("/barang/edit/{id_barang}",[DataBarangController::class,"modify"])->middleware("auth");

Route::get("/peminjaman",[PeminjamanController::class,"index"])->middleware("auth");
Route::get("/peminjaman/add",[PeminjamanController::class,"addIndex"])->middleware("auth");
Route::post("/peminjaman/add",[PeminjamanController::class,"add"])->middleware("auth");
Route::post("/peminjaman/delete",[PeminjamanController::class,"delete"])->middleware("auth");
Route::get("/peminjaman/edit/{id_peminjaman}",[PeminjamanController::class,"modifyIndex"])->middleware("auth");
Route::post("/peminjaman/edit/{id_peminjaman}",[PeminjamanController::class,"modify"])->middleware("auth");

Route::get("/login", [AuthenticateController::class,"loginView"])->name("login")->middleware("guest");
Route::post("/login",[AuthenticateController::class,"loginProcess"])->middleware("guest");
Route::post("/logout",[AuthenticateController::class,"logout"])->middleware("auth");
Route::get("/register",[AuthenticateController::class,"registerView"])->middleware("guest");
Route::post("/register",[AuthenticateController::class,"register"])->middleware("guest");
