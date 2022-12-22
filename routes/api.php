<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ManutencaoPrevistaController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::prefix('manutencao')->group( function(){
    Route::get('/index',[ManutencaoPrevistaController::class, 'showAllmaintenance'])->name('api.manutencao.showAllmaintenance');
    Route::get('/prevista',[ManutencaoPrevistaController::class, 'showPlannedMaintenance'])->name('api.manutencao.showPlannedMaintenance');
});

/*Route::group([
    'prefix'=>'/api'
],function()
{

    Route::prefix('manutencao')->group( function(){
        Route::get('/index',[ManutencaoPrevistaController::class, 'showAllmaintenance'])->name('api.manutencao.showAllmaintenance');
        Route::get('/prevista',[ManutencaoPrevistaController::class, 'showPlannedMaintenance'])->name('api.manutencao.showPlannedMaintenance');
    });

});*/
