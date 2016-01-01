<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormValidationRulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('rules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inputrule_id')->unsigned();
            $table->foreign('inputrule_id')
                ->references('id')->on('inputrules')
                ->onDelete('cascade');
            $table->string('rule');
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
        Schema::dropIfExists('rules');
	}

}
