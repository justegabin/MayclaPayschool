<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserApp extends Model
{
    use HasFactory;

    protected $table = 'users_app';
    protected $primaryKey = 'id_user_app';

    protected $fillable = [
        'nom_prenom_user_app',
        'num_tel_user_app',
        'mdp_user_app'
    ];
}
