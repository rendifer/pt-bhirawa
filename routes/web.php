<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Solution\Product\OtherproductsController;
use App\Http\Controllers\EmailController;

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
    return view('layout.home.home');
});

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/oil and gas', [OtherproductsController::class, 'oil'])->name('oil-and-gas');
Route::get('/Industrial', [OtherproductsController::class, 'Industrial'])->name('Industrial');
Route::get('/Telecominication', [OtherproductsController::class, 'Telecominication'])->name('Telecominication');
Route::get('/Building & Infrastucture', [OtherproductsController::class, 'Building'])->name('Building');
Route::get('/electrical utility', [OtherproductsController::class, 'Locker'])->name('Locker');
Route::get('/transportation', [OtherproductsController::class, 'Outdor'])->name('Outdor');
Route::get('/Housing MRS', [OtherproductsController::class, 'Housing'])->name('Housing');
Route::get('/Marshaling Kios', [OtherproductsController::class, 'Marshaling'])->name('Marshaling');
Route::get('/Protection-Panel Fix & Swing Door', [OtherproductsController::class, 'Protection'])->name('Protection');
Route::get('/Wall-Mounting', [OtherproductsController::class, 'Wall'])->name('Wall');
Route::get('/Console desk', [OtherproductsController::class, 'Console'])->name('Console');
Route::get('/project-reference', [OtherproductsController::class, 'project'])->name('project');

Route::post('/contactUs', [EmailController::class, 'postMessage'])->name('contactUs');
