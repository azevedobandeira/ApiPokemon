<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePokemonsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pokemons', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('tipo');
            $table->string('poderatack');
            $table->string('poderdefesa');
            $table->string('agilidade');
            $table->timestamps(false);

		});


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pokemons');
	}

}
