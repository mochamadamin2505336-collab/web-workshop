<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopController;

Route::get('/', [WorkshopController::class, 'index']);