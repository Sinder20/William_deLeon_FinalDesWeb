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
        Schema::create('criptomoneda', function (Blueprint $table) {
            $table->id('id_producto');
            $table->string('codigo_producto', 45);
            $table->string('nombre', 45);
            $table->string('descripcion', 45);

            $table->unsignedInteger('id_marca');
            $table->foreign('id_marca')->references('id')->on('marca');

            $table->binary('imagen');
            $table->date('fecha_vencimiento');
            $table->dateTime('hora_registro');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
};
