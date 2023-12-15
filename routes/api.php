<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TargetController;
use App\Http\Controllers\YourController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/task', function (Request $request) {
    return "hellllo";
});
Route::get('/target', [TargetController::class, 'index']);
Route::post('/targets', [TargetController::class, 'store']);
Route::delete('/targets/{target}', [TargetController::class, 'destroy']);
Route::get('/targets/{target}', [TargetController::class, 'show']);
Route::put('/targets/{target}', [TargetController::class, 'update']);


