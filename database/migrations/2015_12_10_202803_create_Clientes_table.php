<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function ($table) {
            $table->increments('id');
            $table->integer('id_domicilio')->unsigned();
            $table->integer('id_ocupacion')->unsigned();
            $table->integer('id_dependencia')->unsigned();
            $table->string('nombre', 50);
            $table->string('apellido_paterno', 50);
            $table->string('apellido_materno', 50);
            $table->date('fecha_nac');
            $table->string('rfc', 50);
            $table->string('curp');
            $table->string('telefono_particular', 20);
            $table->string('telefono_trabajo', 20);
            $table->string('celular', 20);
            $table->string('email', 30);
            $table->integer('centro_trabajo');
            $table->float('estatura');
            $table->integer('peso');

        });

        Schema::table('clientes', function($table) {
            $table->foreign('id_domicilio')->references('id')->on('domicilios');
            $table->foreign('id_ocupacion')->references('id')->on('ocupaciones');
            $table->foreign('id_dependencia')->references('id')->on('dependencias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clientes');
    }
}
