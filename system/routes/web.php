<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfilController;


Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('cek', 'cek');
    Route::post('cek', 'prosesCek');
    Route::get('cek/{history}/show', 'result');
    Route::get('cek/{history}/cetak', 'cetak');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login');
    Route::get('logout', 'logout');
    Route::post('login', 'loginProcess');
});


Route::prefix('admin')->middleware('auth')->group(function () {
 
    Route::controller(AdminController::class)->group(function () {
        Route::get('beranda', 'beranda');
        Route::post('cek', 'cek');
        // Route::get('tidak-terdeteksi', 'cek');
    });


    Route::controller(GejalaController::class)->group(function () {
        Route::get('data-gejala', 'index');
        Route::get('data-gejala/create', 'create');
        Route::post('data-gejala/create', 'store');
        Route::post('data-gejala/edit/{gejala}', 'edit');
        Route::get('data-gejala/delete/{gejala}', 'destroy');
    });

    Route::controller(PenyakitController::class)->group(function () {
        Route::get('data-penyakit', 'index');
        Route::get('data-penyakit/create', 'create');
        Route::post('data-penyakit/create', 'store');
        Route::get('data-penyakit/delete/{gejala}', 'destroy');
    });

    Route::controller(RuleController::class)->group(function () {
        Route::get('rule', 'index');
        Route::get('rule/create', 'create');
        Route::post('rule/create', 'store');
        Route::get('rule/edit/{gejala}', 'edit');
        Route::get('rule/delete/{penyakit}', 'destroy');
    });

    Route::controller(HistoryController::class)->group(function () {
        Route::get('history', 'index');
        Route::get('history/{history}/show', 'show');
        Route::get('history/{history}/cetak', 'cetak');
        Route::get('history/{history}/delete', 'delete');
    });
    Route::controller(ProfilController::class)->group(function () {
        Route::get('profil', 'index');
        Route::post('ganti-password', 'update');
    });




});