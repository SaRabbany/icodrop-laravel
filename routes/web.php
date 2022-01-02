<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\indexController;
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

//public routes

Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('/about',[indexController::class, 'about'])->name('about');
Route::get('/active', [indexController::class, 'active'])->name('active');
Route::get('/card-details', [indexController::class, 'card_details'])->name('card_details');
Route::get('/ended', [indexController::class, 'ended'])->name('ended');
Route::get('/upcoming', [indexController::class, 'upcoming'])->name('upcoming');

Route::get('/whitelist', [indexController::class, 'whitelist'])->name('whitelist');

Route::get('card-details/{card_id}', [CardController::class, 'showDetails'])->name('singleCard');
Route::get('active-ico-list', [indexController::class, 'active_ico'])->name('active_ico');
Route::get('upcoming-ico-list', [indexController::class, 'UpComing_ico'])->name('UpComing_ico');
Route::get('ended-ico-list', [indexController::class, 'Ended_ico'])->name('Ended_ico');
Route::get('sandbox-ico-list', [indexController::class, 'SandBox_ico'])->name('SandBox_ico');






//protected routes
Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('admin', [dashboardController::class,'index'] )->name('admin');

    route::resource('cards',CardController::class);
    Route::get('card-update/{id}', [CardController::class, 'update'])->name('card-update');
    Route::delete('card-delete/{id}', [CardController::class, 'destroy'])->name('card-delete');

    Route::post('card-update-store', [cardcontroller::class,'saveUpdate'])->name('cards.saveUpdate');
    

    route::get('archived', [CardController::class, 'archived'])->name('archived');
});


