<?php

use App\Models\card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('update-heart-plus', function (Request $request)
{
    $request->validate([
        'itemId' => 'required'
    ]);

   $card = card::findOrFail($request->itemId);
   $card->update([
        'heart' => $card->heart + 1
    ]);

    return $card->heart;
});


Route::post('update-heart-minus', function (Request $request) {
    $request->validate([
        'itemId' => 'required'
    ]);

    $card = card::findOrFail($request->itemId);
    $card->update([
        'heart' => $card->heart - 1
    ]);

    return $card->heart;
});
