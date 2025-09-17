<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ApprenantController;
use Illuminate\Http\Request;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('frontend.index'); // pointe vers resources/views/frontend/index.blade.php
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::post('/rechercher-matricule', function (Illuminate\Http\Request $request) {
    $matricule = strtoupper(trim($request->input('matricule')));

    try {
        $result = DB::select("
            SELECT
                a.matricule_apprenant as matricule,
                a.nom_apprenant as nom,
                a.prenom_apprenant as prenom,
                e.nom_etablissement as etablissement,
                ms.montant as montant_scolarite,
                ns.libelle_niveau_scolaire as niveau,
                f.montant_frais as frais
            FROM apprenants a
            LEFT JOIN etablissements e ON a.id_etablissement = e.id_etablissement
            LEFT JOIN montants_scolaires ms ON a.id_montant_scolarite = ms.id_montant_scolarite
            LEFT JOIN niveaux_scolaires ns ON a.id_niveau_scolaire = ns.id_niveau_scolaire
            LEFT JOIN frais f ON ms.id_montant_scolarite = f.id_montant_scolarite
            WHERE UPPER(a.matricule_apprenant) = ?
        ", [$matricule]);

        if (empty($result)) {
            return response()->json([
                'success' => false,
                'message' => 'Aucun apprenant trouvé avec le matricule: ' . $matricule
            ]);
        }

        return response()->json([
            'success' => true,
            'apprenant' => $result[0]
        ]);

    } catch (Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Erreur technique: ' . $e->getMessage()
        ]);
    }
});

require __DIR__.'/auth.php';
