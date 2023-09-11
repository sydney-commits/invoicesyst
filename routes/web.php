<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/layout', function(){

    return view('clients.accounts.index');
});

Route::middleware(['auth'])->group(function () {

    Route::get('user/dashboard',[ClientController::class,'index'])->name('user.dashboard');
    Route::get('admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');


});
