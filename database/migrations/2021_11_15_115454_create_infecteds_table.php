<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfectedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infecteds', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('user_id')->unsigned();


            $table->enum('status',['ACTIVO','INACTIVO'])->default('ACTIVO');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infecteds');
    }
}
