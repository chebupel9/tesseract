<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\ImageController;

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

Route::get('/', [TemplateController::class, 'showRussianTemplate'])->name('homeRu');

Route::get('/en', [TemplateController::class, 'showEnglishTemplate'])->name('homeEn');

ROute::post('/upload-image', [ImageController::class, 'uploadImage'])->name('uploadImg');
