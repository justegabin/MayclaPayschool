<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprenant;
use Illuminate\Support\Facades\DB;
use App\Models\Etablissement;
use App\Models\MontantScolaire;
use App\Models\NiveauScolaire;
use App\Models\Frais;

class ApprenantController extends Controller
{
    public function rechercherMatricule(Request $request)
    {
        // Validation basique
        $request->validate([
            'matricule' => 'required|string|max:20'
        ]);

        try {
            // Recherche avec jointures
            $apprenant = DB::table('apprenants as a')
                ->select(
                    'a.matricule_apprenant as matricule',
                    'a.nom_apprenant as nom',
                    'a.prenom_apprenant as prenom',
                    'e.nom_etablissement as etablissement',
                    'ms.montant as montant_scolarite',
                    'ns.libelle_niveau_scolaire as niveau',
                    'f.montant_frais as frais'
                )
                ->leftJoin('etablissements as e', 'a.id_etablissement', '=', 'e.id_etablissement')
                ->leftJoin('montants_scolaires as ms', 'a.id_montant_scolarite', '=', 'ms.id_montant_scolarite')
                ->leftJoin('niveaux_scolaires as ns', 'a.id_niveau_scolaire', '=', 'ns.id_niveau_scolaire')
                ->leftJoin('frais as f', 'ns.id_frais', '=', 'f.id_frais')
                ->where('a.matricule_apprenant', 'like', '%' . $request->matricule . '%')
                ->first();

            if (!$apprenant) {
                return response()->json([
                    'success' => false,
                    'message' => 'Aucun apprenant trouvé avec ce matricule'
                ], 404);
            }

            return response()->json([
                'success' => true,
                'apprenant' => $apprenant
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erreur serveur: ' . $e->getMessage()
            ], 500);
        }
    }
}
