<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Estudiante\EstudianteController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/config', function () {
    return view('admin.config');
})->name('config');


