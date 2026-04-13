<?php


use App\Http\Controllers\CRUD;
use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\Auth;

Route::get('/', function () {
    return view('hallo');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','verified'])->group(function () {
    Route::get('tambah', [CRUD::class, 'tambah'])->name('get.tambah');
    Route::post('/tambah/proses', [CRUD::class, 'Ptambah'])->name('post.tambah');
    ROute::get('/lihat', [CRUD::class, "lihat"]);

});