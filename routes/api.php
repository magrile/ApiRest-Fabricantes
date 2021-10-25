<?php

use App\Http\Controllers\API\FabricantesController;
use App\Models\Fabricantes;
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


Route::get('fabricantes', [FabricantesController::class, 'index']);
Route::post('fabricantes', [FabricantesController::class, 'store']);
Route::get('fabricantes/{fabricantes}', [FabricantesController::class, 'show']);
Route::put('fabricantes/{fabricantes}', [FabricantesController::class, 'update']);
Route::delete('fabricantes/{fabricantes}', [FabricantesController::class, 'destroy']);
