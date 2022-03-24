<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\IndexSliderController;
use App\Http\Controllers\DirectionsController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DirectionsGalleryController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\StaffController;

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

Route::get('/', [IndexController::class, 'index']);

Route::prefix('admin')->group(function () {
    Route::post('/prijava', [AuthController::class, 'login']);
    Route::group(['middleware' => ['auth:sanctum']], function () {
        Route::apiResource('pocetni-slider', IndexSliderController::class);

        Route::get('smjerovi', [DirectionsController::class, 'index']);
        Route::get('smjerovi/{slug}', [DirectionsController::class, 'show']);
        Route::post('smjerovi', [DirectionsController::class, 'store']);
        Route::put('smjerovi/{slug}', [DirectionsController::class, 'update']);
        Route::delete('smjerovi/{slug}', [DirectionsController::class, 'delete']);

        Route::get('novosti', [PostsController::class, 'index']);
        Route::get('novosti/{slug}', [PostsController::class, 'show']);
        Route::post('novosti', [PostsController::class, 'store']);
        Route::put('novosti/{slug}', [PostsController::class, 'update']);
        Route::delete('novosti/{slug}', [PostsController::class, 'delete']);

        Route::get('kategorije', [CategoriesController::class, 'index']);
        Route::post('kategorije', [CategoriesController::class, 'store']);
        Route::delete('kategorije/{slug}', [CategoriesController::class, 'delete']);

        Route::get('zaposlenici', [StaffController::class, 'index']);
        Route::post('zaposlenici', [StaffController::class, 'store']);
        Route::get('zaposlenici/{slug}', [StaffController::class, 'show']);
        Route::delete('zaposlenici/{slug}', [StaffController::class, 'delete']);

        Route::delete('/odjava', [AuthController::class, 'logout']);
    });
});
