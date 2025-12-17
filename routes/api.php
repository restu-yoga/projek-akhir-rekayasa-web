<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelangganController;

// ================= AUTH =================
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// ================= PROTECTED ROUTES =================
Route::middleware('auth:sanctum')->group(function () {

    // AUTH
    Route::post('/logout', [AuthController::class, 'logout']);

    // ================= PRODUK =================
    Route::post('/produk/create', [ProdukController::class, 'create']);               // CREATE
    Route::get('/produk/read', [ProdukController::class, 'read']);                    // READ ALL
    Route::get('/produk/read/{id}', [ProdukController::class, 'readById']);           // READ BY ID
    Route::put('/produk/update/{id}', [ProdukController::class, 'update']);           // UPDATE
    Route::delete('/produk/delete/{id}', [ProdukController::class, 'delete']);        // DELETE

    // ================= KATEGORI =================
    Route::post('/kategori/create', [KategoriController::class, 'create']);
    Route::get('/kategori/read', [KategoriController::class, 'read']);
    Route::get('/kategori/read/{id}', [KategoriController::class, 'readById']);
    Route::put('/kategori/update/{id}', [KategoriController::class, 'update']);
    Route::delete('/kategori/delete/{id}', [KategoriController::class, 'delete']);

    // ================= PELANGGAN =================
    Route::post('/pelanggan/create', [PelangganController::class, 'create']);
    Route::get('/pelanggan/read', [PelangganController::class, 'read']);
    Route::get('/pelanggan/read/{id}', [PelangganController::class, 'readById']);
    Route::put('/pelanggan/update/{id}', [PelangganController::class, 'update']);
    Route::delete('/pelanggan/delete/{id}', [PelangganController::class, 'delete']);
});
