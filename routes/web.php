<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Solution\service\DangerousGoodController;
use App\Http\Controllers\Solution\service\BiomedicalServiceController;
use App\Http\Controllers\Solution\service\TemperatureServiceController;
use App\Http\Controllers\Solution\service\LithiumController;
use App\Http\Controllers\Solution\service\DangerousGoodTrainingController;
use App\Http\Controllers\Solution\Product\UnBoxesController;

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
Route::get('/Dangerous-Goods-Packaging-Service', [DangerousGoodController::class, 'index'])->name('Dangerous-Goods-Packaging-Service');
Route::get('/biomedical-service', [BiomedicalServiceController::class, 'index'])->name('biomedical-service');
Route::get('/Temperature-Sensitive-Packaging', [TemperatureServiceController::class, 'index'])->name('Temperature-Sensitive-Packaging');
Route::get('/lithium-batteries-shipping', [LithiumController::class, 'index'])->name('lithium-batteries-shipping');
Route::get('/Dangerous-Goods-Training', [DangerousGoodTrainingController::class, 'index'])->name('Dangerous-Goods-Training');

Route::get('/dangerous-goods-un-boxes', [UnBoxesController::class, 'index'])->name('dangerous-goods-un-boxes');

