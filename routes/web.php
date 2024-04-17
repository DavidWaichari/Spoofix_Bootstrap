<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
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


Route::get('/', [LandingPageController::class, 'index']);
Route::get('/about', [LandingPageController::class, 'about']);
Route::get('/services', [LandingPageController::class, 'services']);
Route::get('/contacts', [LandingPageController::class, 'contacts']);
Route::get('/page_not_found', [LandingPageController::class, 'pageNotFound']);
Route::get('/services/{name}', [LandingPageController::class, 'serviceDetails']);


Route::get('/{any}', function () {
    return view('layouts/app');
})->where('any', '.*');
