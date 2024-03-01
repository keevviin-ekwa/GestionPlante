<?php

use App\Http\Controllers\PlanteController;
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
//
//Route::get(
//    '/plante',
//    [PlanteController::class, 'index']
//)->name('allPlante');

Route::get('plante',[PlanteController::class,'index']);
Route::get('/plante/{id}',[PlanteController::class,'show']);
Route::delete('/plante/delete/{id}',[PlanteController::class,'destroy']);
Route::post('/plante',[PlanteController::class,'store']);
Route::put("/plante/{id}",[PlanteController::class,'update']);
//Route::apiResource('plante',PlanteController::class);
// 4 routes, get , post, put
