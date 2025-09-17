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
        Schema::create('paiements', function (Blueprint $table) {
            $table->bigIncrements('id_paiement');
            $table->string('type_paiement');
            $table->unsignedBigInteger('id_montant_scolarite')->nullable();
            $table->unsignedBigInteger('id_frais')->nullable();
            $table->string('statut_paiement')->default('en_attente');
            $table->unsignedBigInteger('id_user')->nullable();

            $table->foreign('id_montant_scolarite')->references('id_montant_scolarite')->on('montants_scolaires')->nullOnDelete();
            $table->foreign('id_frais')->references('id_frais')->on('frais')->nullOnDelete();
            $table->foreign('id_user')->references('id_user')->on('users_site')->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
