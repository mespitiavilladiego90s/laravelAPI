<?php
use Illuminate\Http\Middleware\HandleCors;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;


Route::middleware([HandleCors::class])->group(function () {
    Route::resource('/usuarios', UsuariosController::class);
});