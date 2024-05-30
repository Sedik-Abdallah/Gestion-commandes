<?php

use App\Http\Controllers\etudiantController;
use App\Http\Controllers\FormationController;
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

 Route::resource('etudiants',etudiantController::class);
 Route::get('/search', [FormationController::class, 'index'])->name('formation.index');
 Route::get('/search/{id}', [FormationController::class, 'search'])->name('formation.search');
