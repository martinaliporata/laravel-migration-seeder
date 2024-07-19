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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda');
            $table->string('stazione di partenza');
            $table->string('stazione di arrivo');
            $table->dateTime('Orario di partenza');
            $table->dateTime('Orario di arrivo');
            $table->integer('Codice treno');
            $table->integer('Numero carrozze');
            $table->boolean('In orario');
            $table->boolean('Cancellato');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
