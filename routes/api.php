<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PageController;
use App\Http\Controllers\Api\V1\TranslationController;
use App\Http\Controllers\Api\V1\ComponentController;
use App\Http\Controllers\Api\V1\PropsController;


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

Route::group(['prefix' => 'v1', 'as' => 'api.'], function () {
    // Route::get('page', [PageController::class, 'index']);
    Route::get('translation', [TranslationController::class, 'getAll']);
    Route::post('translation/add', [TranslationController::class, 'addTranslation']);
    Route::apiResource('pages', PageController::class);

    Route::apiResource('components', ComponentController::class);
    Route::apiResource('props', PropsController::class);

});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
