<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\gamecontroller;

// Route pour afficher tous les jeux
Route::get('/games', [GameController::class, 'index'])->name('games.index');

// Route pour afficher le formulaire de création d'un jeu
Route::get('/games/create', [GameController::class, 'create'])->name('games.create');

// Route pour enregistrer un nouveau jeu
Route::post('/games', [GameController::class, 'store'])->name('games.store');

// Route pour afficher un jeu spécifique
Route::get('/games/{games}', [GameController::class, 'show'])->name('games.show');

// Route pour afficher le formulaire d'édition d'un jeu
Route::get('/games/{games}/edit', [GameController::class, 'edit'])->name('games.edit');

// Route pour mettre à jour un jeu existant
Route::put('/games/{games}', [GameController::class, 'update'])->name('games.update');

// Route pour supprimer un jeu
Route::delete('/games/{games}', [GameController::class, 'destroy'])->name('games.destroy');

