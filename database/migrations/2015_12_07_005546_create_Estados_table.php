<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados', function($table) {
        	$table->increments('id');
        	$table->integer('id_pais')->unsigned();
        	$table->string('estado', 75);
        });

        Schema::table('estados', function($table) {
        	$table->foreign('id_pais')->references('id')->on('paises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::drop('estados');
    }
}
