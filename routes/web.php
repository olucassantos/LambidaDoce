<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/admin');

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'home')->name('admin.home');
});

// Rota para exibir o formulário de criação de usuário
Route::get('/cadastrar', [UserController::class, 'create'])
    ->name('user.create');

// Rota que vai armazenar o novo usuário (ainda não implementada)
Route::post('/cadastrar', [UserController::class, 'store'])
    ->name('user.store');
