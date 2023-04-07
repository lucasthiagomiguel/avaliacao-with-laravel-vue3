<?php
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AvaliacaoDesempenhoController;
use App\Http\Controllers\AnswersController;
use App\Http\Controllers\AvaliacaoFeitaController;
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
Route::prefix('v1')->middleware('jwt.auth')->group(function(){
    
    Route::apiResource('task',TaskController::class);
    Route::apiResource('avaliacao-done',AvaliacaoFeitaController::class);
    Route::post('me','App\Http\Controllers\AuthController@me');
    Route::post('refresh','App\Http\Controllers\AuthController@refresh');
    Route::post('logout','App\Http\Controllers\AuthController@logout');
});
Route::prefix('v1')->group(function(){
    Route::apiResource('answers',AnswersController::class);
    Route::apiResource('performance',AvaliacaoDesempenhoController::class);
    Route::apiResource('users',UsersController::class);
    Route::post('login','App\Http\Controllers\AuthController@login');
    
});
