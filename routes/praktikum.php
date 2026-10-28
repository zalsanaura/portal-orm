<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/praktikum/mahasiswa', [StudentController::class, 'index']);