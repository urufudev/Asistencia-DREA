<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresencialWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presencial_works', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('event_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('office_id')->unsigned()->nullable();

            $table->dateTime('input')->nullable();
            $table->dateTime('output')->nullable();

            $table->string('feber')->nullable();
            $table->string('respire')->nullable();
            $table->string('fleme')->nullable();
            $table->string('olfate')->nullable();
            $table->string('personscovid')->nullable();
            $table->string('medicine')->nullable();
            $table->string('name_medicine')->nullable();

            $table->timestamps();

            $table->foreign('event_id')->references('id')->on('events')
                ->onUpdate('cascade');
            
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade');

            $table->foreign('office_id')->references('id')->on('offices')
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
        Schema::dropIfExists('presencial_works');
    }
}
