<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SasaranController;

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

Route::get('/admin', function(){
    return view ('admin.dashboard');
});

Route::get('/pimpinan', function(){
    return view ('pimpinan.dashboard');
});

Route::group(['prefix' => 'sasaran'], function () {
    Route::get('/', [SasaranController::class, 'sasaran'])->name('admin.sasaran');
    Route::get('/create', [SasaranController::class, 'sasaranCreate'])->name('admin.sasaran.create');
    Route::post('/store', [SasaranController::class, 'sasaranStore'])->name('admin.sasaran.store');
    Route::get('/edit', [SasaranController::class, 'sasaranEdit'])->name('admin.sasaran.edit');
    Route::patch('/{sasaran}/update', [SasaranController::class, 'sasaranUpdate'])->name('admin.sasaran.update');
    Route::delete('/{sasaran:id}/destroy', [SasaranController::class, 'sasaranDelete'])->name('admin.sasaran.delete');
});