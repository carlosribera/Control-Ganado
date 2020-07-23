<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaAnimal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_nac');
            $table->integer('peso');
            $table->integer('edad');
            $table->string('raza',50);
            $table->string('color',20);
            $table->string('sexo',2);
            $table->boolean('pedigri');
            $table->date('fecha_compra');
            $table->date('fecha_venta');
            $table->date('fecha_muerte');

            $table->unsignedInteger('id_madre');
            $table->foreign('id_madre', 'fk_animal_m_animal')->references('id')->on('animal')->onDelete('restrict')->onUpdate('restrict');

            $table->unsignedInteger('id_historial');
            $table->foreign('id_historial', 'fk_animal_historial')->references('id')->on('historial')->onDelete('restrict')->onUpdate('restrict');

            $table->unsignedInteger('id_propietario');
            $table->foreign('id_propietario', 'fk_animal_propietario')->references('id')->on('propietario')->onDelete('restrict')->onUpdate('restrict');

            $table->unsignedInteger('id_veterinario');
            $table->foreign('id_veterinario', 'fk_animal_veterinario')->references('id')->on('veterinario')->onDelete('restrict')->onUpdate('restrict');

            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal');
    }
}
