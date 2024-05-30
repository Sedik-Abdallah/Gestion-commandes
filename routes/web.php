<?php

use App\Http\Controllers\CommandeController;
use App\Http\Controllers\PopupController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('commandes', CommandeController::class);