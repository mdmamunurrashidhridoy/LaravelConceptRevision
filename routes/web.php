<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, Mahek!';
});

Route::get('/users', [UserController::class, 'index']);
Route::post('/submit', [UserController::class, 'submit']);
Route::get('/form', function () {
    return view('form');
});

Route::get('/students/{id}/edit', [UserController::class, 'edit']);
Route::get('/students', [UserController::class, 'students']);
Route::put('/students/{id}', [UserController::class, 'update']);
Route::delete('/students/{id}', [UserController::class, 'destroy']);
Route::get('/students/findStudent', function () {
    return view('findStudent');
});
Route::post('/students/findStudent', [UserController::class, 'findStudent']);
