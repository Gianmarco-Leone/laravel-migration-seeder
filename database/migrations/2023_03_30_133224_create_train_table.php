<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 60);
            $table->string('stazione_di_partenza', 60);
            $table->string('stazione_di_arrivo', 60);
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->string('codice_treno')->unique();
            $table->tinyInteger('numero_carrozze')->nullable();
            $table->boolean('in_orario')->nullable();
            $table->boolean('cancellato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('train');
    }
};