<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Quartier;

class Etablissement extends Model
{
     use HasFactory;

    protected $table = 'etablissements';
    protected $primaryKey = 'id_etablissement';

    protected $fillable = [
        'nom_etablissement',
        'tel_etablissement',
        'id_quartier'
    ];

    public function quartier()
    {
        return $this->belongsTo(Quartier::class, 'id_quartier');
    }

     public function apprenants()
    {
        return $this->hasMany(Apprenant::class, 'id_etablissement');
    }
}
