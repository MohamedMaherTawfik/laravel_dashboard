<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeaderController;

Route::get('/protofolio',[headerController::class,'loadHeader']);
Route::get('/dashboard',[headerController::class,'loadAdmin']);
Route::get('/form',[headerController::class,'addData']);
