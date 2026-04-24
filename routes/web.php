<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;


// Routes Publiques
Route::get('/', function () { return view('welcome'); });
Route::get('/competences', function () { return view('competences'); });
Route::get('/histoire', function () { return view('histoire'); });
Route::get('/projets', [ProjectController::class, 'index'])->name('projets.index');
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Routes Protégées (Nécessite d'être connecté)
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/projets/{project}/edit', [ProjectController::class, 'edit'])->name('projets.edit');
    Route::put('/projets/{project}', [ProjectController::class, 'update'])->name('projets.update');
    Route::delete('/projets/{project}', [ProjectController::class, 'destroy'])->name('projets.destroy');

    // Gestion Projets
    Route::get('/projets/create', function () { return view('projets.create'); })->name('projets.create');
    Route::post('/projets', [ProjectController::class, 'store'])->name('projets.store');
    Route::delete('/projets/{id}', [ProjectController::class, 'destroy'])->name('projets.destroy');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('/admin/messages', [ContactController::class, 'index'])->name('admin.messages');
});

require __DIR__.'/auth.php';
