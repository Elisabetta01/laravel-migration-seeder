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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda');
            $table->string('Stazione_di_Partenza');
            $table->string('Stazione_di_Arrivo');
            $table->dateTime('Orario_di_Partenza');
            $table->dateTime('Orario_di_Arrivo');
            $table->string('Codice_Treno');
            $table->tinyInteger('Numero_Carrozze');
            $table->boolean('In_orario')->default(true);
            $table->boolean('Cancellato')->default(false);
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
        Schema::dropIfExists('trains');
    }
};
