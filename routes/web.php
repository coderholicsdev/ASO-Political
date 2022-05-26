<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Register\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/register', [RegisterController::class,'store']);

//home views
Route::get('/home', [HomeController::class,'home'])->name('home');
Route::get('/about_us', [HomeController::class,'about'])->name('about_us');
Route::get('/latest_news', [HomeController::class,'latestNews'])->name('latest_news');
Route::get('/pyo', [HomeController::class,'pyo'])->name('pyo');
Route::get('/contact_us', [HomeController::class,'contact'])->name('contact_us');
