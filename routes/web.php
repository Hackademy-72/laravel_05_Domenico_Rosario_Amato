<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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


Route::get('/home/index', [HomeController::class, 'index'])->name('home.index');

Route::get('/home/create', [HomeController::class, 'create'])->name('home.create');

Route::post('/home/store', [HomeController::class, 'store'])->name('home.store');

Route::get('/home/show{home}', [HomeController::class, 'show'])->name('home.show');

Route::get('/home/edit{home}', [HomeController::class, 'edit'])->name('home.edit');

Route::put('/home/update{home}', [HomeController::class, 'update'])->name('home.update');

Route::delete('/home/destroy{home}', [HomeController::class, 'destroy'])->name('home.destroy');

Route::get('/home{home}/detach/{article}', [HomeController::class, 'detach'])->name('home.detach');


Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');

Route::delete('/profile/destroy', [UserController::class, 'destroy'])->name('user.destroy');