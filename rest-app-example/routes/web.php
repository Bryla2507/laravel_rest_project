<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::apiResource('people',\App\Http\Controllers\PeopleController::class);

Route::prefix('people')
    ->name('people.')
    ->group(function (){
        Route::get('/', [\App\Http\Controllers\PeopleController::class, 'index'])->name('index');
        Route::post('/', [\App\Http\Controllers\PeopleController::class, 'store'])->name('store');
        Route::get('/{name}', [\App\Http\Controllers\PeopleController::class, 'show'])->name('show');
        Route::put('/{name}', [\App\Http\Controllers\PeopleController::class, 'update'])->name('update');
        Route::delete('/{name}', [\App\Http\Controllers\PeopleController::class, 'destroy'])->name('destroy');
    });

Route::get('/', function () {
    return view('welcome');
});
