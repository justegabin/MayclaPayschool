<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    use HasFactory;

    protected $table = 'apprenants'; // Nom exact de ta table

    protected $primaryKey = 'id_apprenant';

    protected $fillable = [
        'matricule_apprenant',
        'nom_apprenant',
        'prenom_apprenant',
        'id_etablissement',
        'id_montant_scolarite',
        'id_niveau_scolaire'
    ];

    // Relations
    public function etablissement()
    {
        return $this->belongsTo(Etablissement::class, 'id_etablissement');
    }

    public function montantScolarite()
    {
        return $this->belongsTo(MontantScolaire::class, 'id_montant_scolarite');
    }

    public function frais()
    {
        return $this->belongsTo(Frais::class, 'id_frais');
    }

    public function niveauScolaire()
    {
        return $this->belongsTo(NiveauScolaire::class, 'id_niveau_scolaire');
    }
}
