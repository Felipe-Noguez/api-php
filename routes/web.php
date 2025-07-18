<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\SiteController;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('/sobre', function () {
    return Inertia::render('Sobre');
})->name('sobre');

Route::get('/contato', [SiteController::class, 'contato'])->name('contato');

// Route::get('/contato', function () {
//     return '<h1>Página de Contato</h1><p>Esta é a sua primeira rota de contato!</p>';
// });

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
