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
      
        Schema::create('fournisseur', function (Blueprint $table) {
            $table->integer('id');
            $table->string('adresse');
            $table->string('email');
            $table->string('formeJuridique');
            $table->string('matriculeFiscale');
            $table->string('nom');
            $table->string('phone');
            $table->string('raisonSociale');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fournisseur');
    }
};
