<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeaderController;

Route::get('/protofolio',[headerController::class,'loadHeader']);
