<?php

use Illuminate\Support\Facades\Route;

#Khoa
use App\Http\Controllers\KhoaController;
Route::get('/khoa',[KhoaController::class,'index'])->name('khoaa.indexa');
//
Route::get('/khoa/detail/{makh}',
[KhoaController::class,'detail'])->name('khoa.detail');
//
Route::get('/khoa/create',[KhoaController::class,'create'])->name('khoa.create');
//
Route::post('/khoa/create',[KhoaController::class,'createSubmit'])->name('khoa.createSubmit');
//
Route::get('/khoa/edit/{makh}',[KhoaController::class,'edit'])->name('khoa.edit');
Route::post('/khoa/edit',[KhoaController::class,'editSubmit'])->name('khoa.editSubmit');
//
Route::get('/khoa/delete/{makh}',[KhoaController::class,'delete'])->name('khoa.delete');
//
Route::get('/khoa/delete/{makh}',[KhoaController::class,'delete'])->name('khoa.delete');
//