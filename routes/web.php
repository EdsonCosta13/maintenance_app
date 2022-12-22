<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\VeiculoController;
use App\Http\Controllers\Admin\UsuarioController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::group([
    'prefix'=>'/vehicle',
],function()
{
    Route::get('index',[VeiculoController::class,'index'])->name('vehicle.index');
    Route::get('create',[VeiculoController::class,'create'])->name('vehicle.create');
    Route::post('store',[VeiculoController::class,'store'])->name('vehicle.store');
    Route::get('edit',[VeiculoController::class,'edit'])->name('vehicle.edit');
    Route::get('update',[VeiculoController::class,'update'])->name('vehicle.update');
    Route::get('destroy',[VeiculoController::class,'destroy'])->name('vehicle.destroy');
});

Route::group([
    'prefix'=>'/maintenance'
],function()
{
    Route::get('index',[UsuarioController::class,'index']);
    Route::get('create',[UsuarioController::class,'create']);
    Route::get('store',[UsuarioController::class,'store']);
    Route::get('edit',[UsuarioController::class,'edit']);
    Route::get('update',[UsuarioController::class,'update']);
    Route::get('destroy',[UsuarioController::class,'destroy']);
});


Route::group([
    'prefix'=>'/usuario'
],function()
{
    Route::get('index',[UsuarioController::class,'index'])->name('usuario.index');
    Route::get('create',[UsuarioController::class,'create'])->name('usuario.create');
    Route::get('store',[UsuarioController::class,'store'])->name('usuario.store');
    Route::get('edit',[UsuarioController::class,'edit'])->name('usuario.edit');
    Route::get('update',[UsuarioController::class,'update'])->name('usuario.update');
    Route::get('destroy',[UsuarioController::class,'destroy'])->name('usuario.destroy');
});





