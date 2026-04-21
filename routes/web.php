<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListmenucafeController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('listmenucafe', ListmenucafeController::class);