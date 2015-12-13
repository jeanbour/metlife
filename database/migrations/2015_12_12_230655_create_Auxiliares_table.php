<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuxiliaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auxiliares', function(Blueprint $table)
        {
        	$table->increments('id');
        	$table->string('nombre', 75);
        	$table->string('apellido_paterno', 75);
        	$table->string('apellido_materno', 75);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('auxiliares');
    }
}