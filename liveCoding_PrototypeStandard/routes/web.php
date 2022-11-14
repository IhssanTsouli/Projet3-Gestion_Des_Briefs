<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BriefsController;
use App\Http\Controllers\TachesController;
use App\Http\Controllers\AssignController;

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

Route::resource('gestionbriefs',BriefsController::class);
Route::resource('gestiontaches',TachesController::class);


Route::get('mytache/createT/{id}',[TachesController::class,'create'])->name('mytache.createT');
Route::get('mytache/updateT/{id}',[TachesController::class,'edit'])->name('mytacheupdateT');
//standard
Route::resource('/brief', BriefsController::class);
Route::resource('/assign', AssignController::class);


