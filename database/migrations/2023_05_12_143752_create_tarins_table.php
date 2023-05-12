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
        Schema::create('tarins', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 30);
            $table->string('Stazione di partenza', 50);
            $table->string('Stazione di arrivo', 30);
            $table->time('Orario di partenza');
            $table->time('Orario di arrivo');
            $table->string('Codice treno', 10);
            $table->unsignedTinyInteger('Numero carrozze', 30);
            $table->boolean('In orario');
            $table->boolean('Cancellato');
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
        Schema::dropIfExists('tarins');
    }
};
