<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFachkrafteTable extends Migration {


	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('fachkrafte', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('installateur_id')->unsigned();
            $table->foreign('installateur_id')
                    ->references('id')->on('installateure')
                    ->onDelete('cascade');
            $table->string('vorname');
            $table->string('nachname');
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
        Schema::dropIfExists('fachkrafte');
    }

}
