<?php

use App\Http\Controllers\etudiantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/etudiant', [etudiantController::class, 'liste_etudiant'])->name('etudiant');


Route::get('/ajouter', [etudiantController::class, 'ajouter_etudiant'])->name('ajoutetudiant');

Route::post('/ajouter/traitement', [etudiantController::class, 'ajouter_etudiant_traitement'])->name('ajoutetudianttraitement');

Route::get('/modifier-etudiant/{id}', [etudiantController::class, 'modifier_etudiant'])->name('modifieretudiant');

Route::post('/modifier/traitement', [etudiantController::class, 'modifier_etudiant_traitement'])->name('modifieretudianttraitement');

Route::get('/supprimer-etudiant/{id}', [etudiantController::class, 'supprimer_etudiant'])->name('supprimeretudiant');
