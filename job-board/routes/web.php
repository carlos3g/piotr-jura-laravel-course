<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::resource('jobs', JobController::class)
    ->only(['index', 'show']);

Route::get('', fn () => to_route('jobs.index'));
