<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('id_nivel')->unsigned();
            $table->string('nombre', 75);
            $table->string('apellido_paterno', 75);
            $table->string('apellido_materno', 75);
            $table->string('usuario', 75);
            $table->string('contrasena', 256);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarios');
    }
}
