<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [PublicController::class, 'index'])->name('homePage');


Route::get('/i-nostri-articoli',[ArticleController::class, 'index'])->name('articoli');

Route::post('/i-nostri-articoli/store', [ArticleController::class, 'store'])->name('articoli-store');

Route::get('/articoli-creati', [ArticleController::class, 'created'])->name('articoli-creati');


Route::get('/contattaci', [ContactController::class, 'index'])->name('contact_us');

Route::post('/contattaci/submit',[ContactController::class, 'contact_us_submit'])->name('contact.us.submit');
