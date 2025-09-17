<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserApp;
use App\Models\MontantScolaire;
use App\Models\Frais;

class Paiement extends Model
{
    use HasFactory;

    protected $table = 'paiements';
    protected $primaryKey = 'id_paiement';

    protected $fillable = [
        'type_paiement',
        'id_montantscolarite',
        'id_frais',
        'status_paiement',
        'id_user'
    ];

    public function user()
    {
        return $this->belongsTo(UserApp::class, 'id_user');
    }

    public function montantScolaire()
    {
        return $this->belongsTo(MontantScolaire::class, 'id_montantscolarite');
    }

    public function frais()
    {
        return $this->belongsTo(Frais::class, 'id_frais');
    }
}
