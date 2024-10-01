<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('image-upload', [UploadController::class, 'index']);
Route::post('image-upload', [UploadController::class, 'store'])->name('image.store');