<?php

use App\Http\Controllers\PageController;
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
    return view('welcome');
});

Route::get('/inscription-connexion', function () {
    return view('inscription-connexion');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::post('/inscription',[PageController::class,'inscription'])->name('inscription');
Route::post('/connexion',[PageController::class,'connexion'])->name('connexion');
