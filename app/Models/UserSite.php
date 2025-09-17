<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSite extends Model
{
    use HasFactory;

    protected $table = 'users_site';
    protected $primaryKey = 'id_user';

    protected $fillable = [
        'nom_et_prenom_user',
        'email_user',
        'mdp_user'
    ];
}
