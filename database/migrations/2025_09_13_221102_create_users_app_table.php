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
        Schema::create('users_app', function (Blueprint $table) {
            $table->bigIncrements('id_user_app');
            $table->string('nom_prenom_user_app');
            $table->string('num_tel_user_app')->unique();
            $table->string('mot_de_passe_user_app');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_app');
    }
};
