<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MontantScolaire;

class NiveauScolaire extends Model
{
    use HasFactory;

    protected $table = 'niveaux_scolaires';
    protected $primaryKey = 'id_niveau_scolaire';

    protected $fillable = [
        'libelle_niveau_scolaire',
        'id_montant_scolarite',
        'id_frais'
    ];

    public function montantsScolaires()
    {
        return $this->hasMany(MontantScolaire::class, 'id_niveau_scolaire');
    }

    public function frais()
    {
        return $this->hasOne(Frais::class, 'id_niveau_scolaire', 'id_niveau_scolaire');
    }
}
