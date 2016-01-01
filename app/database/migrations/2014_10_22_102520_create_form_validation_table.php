<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormValidationTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulare', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();
        });
        Schema::create('inputrules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('formular_id')->unsigned();
            $table->foreign('formular_id')
                ->references('id')->on('formulare')
                ->onDelete('cascade');
            $table->string('name');
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

        Schema::dropIfExists('inputrules');
        Schema::dropIfExists('formulare');


    }
}
