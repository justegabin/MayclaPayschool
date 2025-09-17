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
        Schema::create('frais', function (Blueprint $table) {
            $table->bigIncrements('id_frais');
            $table->decimal('montant_frais', 12, 2);
            $table->unsignedBigInteger('id_montant_scolarite')->nullable();
            $table->foreign('id_montant_scolarite')->references('id_montant_scolarite')->on('montants_scolaires')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frais');
    }
};
