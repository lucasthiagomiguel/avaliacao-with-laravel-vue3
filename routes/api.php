<?php
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AvaliacaoDesempenhoController;
use App\Http\Controllers\AnswersController;
use App\Http\Controllers\AvaliacaoDoneController;
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
    Route::post('me','App\Http\Controllers\AuthController@me');
    Route::post('refresh','App\Http\Controllers\AuthController@refresh');
    Route::post('logout','App\Http\Controllers\AuthController@logout');
    Route::get('my-team/{id}','App\Http\Controllers\UsersController@avaliacao');
    
});
Route::prefix('v1')->group(function(){
    Route::apiResource('avaliacaoDone',AvaliacaoDoneController::class);
    Route::apiResource('answers',AnswersController::class);
    Route::apiResource('performance',AvaliacaoDesempenhoController::class);
    Route::apiResource('users',UsersController::class);
    Route::post('login','App\Http\Controllers\AuthController@login');
    
});
