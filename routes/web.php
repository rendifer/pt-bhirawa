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
use App\Http\Controllers\Solution\Product\ConsoleController;
use App\Http\Controllers\Solution\Product\LockerController;
use App\Http\Controllers\Solution\Product\BiomedicalController;
use App\Http\Controllers\Solution\Product\SpesializedController;
use App\Http\Controllers\Solution\Product\MaterialisController;
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
Route::get('/Dangerous-Goods-Packaging-Service', [DangerousGoodController::class, 'index'])->name('Dangerous-Goods-Packaging-Service');
Route::get('/biomedical-service', [BiomedicalServiceController::class, 'index'])->name('biomedical-service');
Route::get('/Temperature-Sensitive-Packaging', [TemperatureServiceController::class, 'index'])->name('Temperature-Sensitive-Packaging');
Route::get('/lithium-batteries-shipping', [LithiumController::class, 'index'])->name('lithium-batteries-shipping');
Route::get('/Dangerous-Goods-Training', [DangerousGoodTrainingController::class, 'index'])->name('Dangerous-Goods-Training');

Route::get('/Console-desk', [ConsoleController::class, 'index'])->name('Console deks');
Route::get('/Locker', [LockerController::class, 'index'])->name('Locker');
Route::get('/biomedical-packaging', [BiomedicalController::class, 'index'])->name('biomedical-packaging');
Route::get('/specialized-boxes', [SpesializedController::class, 'index'])->name('specialized-boxes');
Route::get('/other-packaging-materials', [MaterialisController::class, 'index'])->name('other-packaging-materials');

Route::post('/contactUs', [EmailController::class, 'postMessage'])->name('contactUs');
