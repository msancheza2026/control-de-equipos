<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;

Route::get('/', function () {
    return redirect()->route('areas.index');
});

Route::resource('areas', AreaController::class);
