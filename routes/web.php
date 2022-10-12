<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\PublicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/upload', [PublicController:: class, "upload"])->name("upload");
Route::post('/storeAnnuncio', [PublicController:: class, "storeAnnuncio"])->name("storeAnnuncio");
Route::get('/', [PublicController:: class, 'indexAnnunci'])->name('indexAnnunci');
