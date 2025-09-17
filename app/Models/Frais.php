<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MontantScolaire;

class Frais extends Model
{
    use HasFactory;

    protected $table = 'frais';
    protected $primaryKey = 'id_frais';

    protected $fillable = [
        'montant_frais',
        'id_montant_scolarite'
    ];

    public function montantScolaire()
    {
        return $this->belongsTo(MontantScolaire::class, 'id_montant_scolarite');
    }
}
