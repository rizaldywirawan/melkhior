<?php

use App\Http\Controllers\BodyMassController;
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

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/body-masses', [BodyMassController::class, 'index']);
Route::post('/body-masses', [BodyMassController::class, 'store']);
Route::get('/body-masses/{body_mass}', [BodyMassController::class, 'show']);
Route::get('/body-masses/{body_mass}/edit', [BodyMassController::class, 'edit']);
Route::put('/body-masses/{body_mass}', [BodyMassController::class, 'update']);
