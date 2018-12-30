<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBattlePlayerTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('battle_player', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('battle_id')->unique();
            $table->unsignedInteger('user_id')->unique();
            $table->timestamps();
            $table->unique(['battle_id', 'user_id']);
        });

        Schema::table('battle_player', function($table) {
            $table->foreign('battle_id')->references('id')->on('battles');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('battle_player');
    }

}
