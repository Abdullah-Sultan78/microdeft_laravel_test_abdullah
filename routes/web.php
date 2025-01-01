<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::post('/requisition/add',[HomeController::class,'create'])->name('requisition.add');
