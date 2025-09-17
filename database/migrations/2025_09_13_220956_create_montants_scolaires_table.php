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
        Schema::create('montants_scolaires', function (Blueprint $table) {
            $table->bigIncrements('id_montant_scolarite');
            $table->unsignedBigInteger('id_niveau_scolaire')->nullable();
            $table->decimal('montant', 12, 2);
            $table->foreign('id_niveau_scolaire')->references('id_niveau_scolaire')->on('niveaux_scolaires')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('montants_scolaires');
    }
};
