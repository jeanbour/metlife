<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipios', function($table) {
        	$table->increments('id');
        	$table->integer('id_estado')->unsigned();
        	$table->string('municipio', 75);
        });

        Schema::table('municipios', function($table) {
        	$table->foreign('id_estado')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::drop('municipios');
    }
}
