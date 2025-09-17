<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Etablissement;

class Quartier extends Model
{
    use HasFactory;

    protected $table = 'quartiers';
    protected $primaryKey = 'id_quartier';

    protected $fillable = [
        'nom_quartier'
    ];

    public function etablissements()
    {
        return $this->hasMany(Etablissement::class, 'id_quartier');
    }
}
