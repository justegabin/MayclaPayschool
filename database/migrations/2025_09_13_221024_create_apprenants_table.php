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
        Schema::create('apprenants', function (Blueprint $table) {
            $table->bigIncrements('id_apprenant');
            $table->string('matricule_apprenant')->unique();
            $table->string('nom_apprenant');
            $table->string('prenom_apprenant');
            $table->unsignedBigInteger('id_etablissement')->nullable();
            $table->unsignedBigInteger('id_montant_scolarite')->nullable();
            $table->unsignedBigInteger('id_niveau_scolaire')->nullable();

            $table->foreign('id_etablissement')->references('id_etablissement')->on('etablissements')->nullOnDelete();
            $table->foreign('id_montant_scolarite')->references('id_montant_scolarite')->on('montants_scolaires')->nullOnDelete();
            $table->foreign('id_niveau_scolaire')->references('id_niveau_scolaire')->on('niveaux_scolaires')->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apprenants');
    }
};
