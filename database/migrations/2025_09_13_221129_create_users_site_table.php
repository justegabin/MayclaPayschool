<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
         Schema::create('users_site', function (Blueprint $table) {
            $table->bigIncrements('id_user');
            $table->string('nom_prenom_user');
            $table->string('email_user')->unique();
            $table->string('mot_de_passe_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_site');
    }
};
