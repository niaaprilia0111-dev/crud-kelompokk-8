<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuKantinController;

Route::resource('menu-kantins', MenuKantinController::class);
Route::get('/', function () {
    return redirect()->route('menu-kantins.index');
});
