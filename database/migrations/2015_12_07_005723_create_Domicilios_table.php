<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios', function($table) {
        	$table->increments('id');
        	$table->integer('id_municipio')->unsigned();
        	$table->string('calle', 50);
        	$table->string('num_exterior', 20);
        	$table->string('num_interior', 20);
        	$table->string('comunidad', 75);

        });

        Schema::table('domicilios', function($table) {
        	$table->foreign('id_municipio')->references('id')->on('municipios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('domicilios');
    }
}
