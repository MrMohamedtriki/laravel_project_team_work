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
        
        Schema::create('produit', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('marque');
            $table->string('nom');
            $table->float('prix');
            $table->float('prixAchatHt');
            $table->integer('quantiteStock');
            $table->integer('stockAlerte');
            $table->string('taille');
            $table->float('tva');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produit');
    }
};
