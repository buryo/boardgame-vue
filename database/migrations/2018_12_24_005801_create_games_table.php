<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('games', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
            $table->increments('id');
			$table->string('name', 20)->unique();
			$table->string('description', 191)->nullable();
			$table->unsignedInteger('minPlayers');
			$table->unsignedInteger('maxPlayers');
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
		Schema::drop('games');
	}

}
