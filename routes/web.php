<?php

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

Route::redirect("/","dashboard");

//RUte untuk menghubungkan setiap tampilan di Website nya
//Route::get("/ nama dari LINK nya",[NAMA CLASS NYA (import dan wajib buat dulu)::class,"nama fungsi nya"]);
Route::get("/dashboard",[DashboardController::class,"index"]);
Route::get("/barang",[DataBarangController::class,"index"]);
Route::post("/barang/delete",[DataBarangController::class,"delete"]);
Route::get("/barang/add",[DataBarangController::class,"addIndex"]);
Route::post("/barang/add",[DataBarangController::class,"add"]);
Route::get("/barang/edit/{id_barang}",[DataBarangController::class,"modifyIndex"]);
Route::post("/barang/edit/{id_barang}",[DataBarangController::class,"modify"]);

Route::get("/peminjaman",[PeminjamanController::class,"index"]);
Route::get("/peminjaman/add",[PeminjamanController::class,"addIndex"]);
Route::post("/peminjaman/add",[PeminjamanController::class,"add"]);
//Route::post("/peminjaman/delete",[PeminjamanController::class,"delete"]);
//Route::get("/peminjaman/edit",[PeminjamanController::class,"modifyIndex"]);
//Route::post("/peminjaman/edit",[PeminjamanController::class,"modify"]);
