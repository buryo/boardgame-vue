<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigInteger('score');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('battle_id');
            $table->timestamps();
            $table->primary(['user_id', 'battle_id']);
        });

        Schema::table('scores', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('battle_id')->references('id')->on('battles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
