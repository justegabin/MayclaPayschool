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
       Schema::create('etablissements', function (Blueprint $table) {
            $table->bigIncrements('id_etablissement');
            $table->string('nom_etablissement');
            $table->string('tel_etablissement')->nullable();
            $table->unsignedBigInteger('id_quartier')->nullable();
            $table->foreign('id_quartier')->references('id_quartier')->on('quartiers')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etablissements');
    }
};
