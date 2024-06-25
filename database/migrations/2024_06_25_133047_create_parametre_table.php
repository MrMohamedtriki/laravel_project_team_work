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
        Schema::create('parametre', function (Blueprint $table) {

            $table->integer('id');
            $table->integer('compteur');
            $table->string('prefixe');
            $table->string('separateur');
            $table->string('table');
            $table->integer('taille');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parametre');
    }
};
