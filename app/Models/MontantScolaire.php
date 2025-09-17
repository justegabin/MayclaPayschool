<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NiveauScolaire;
use App\Models\Frais;

class MontantScolaire extends Model
{
    use HasFactory;

    protected $table = 'montants_scolaires';
    protected $primaryKey = 'id_montant_scolaire';

    protected $fillable = [
        'id_niveau_scolaire',
        'montant'
    ];

    public function niveauScolaire()
    {
        return $this->belongsTo(NiveauScolaire::class, 'id_niveau_scolaire');
    }

    public function frais()
    {
        return $this->hasMany(Frais::class, 'id_montant_scolarite');
    }
}
