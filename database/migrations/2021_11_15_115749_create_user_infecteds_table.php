<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserinfectedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infecteds', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('infected_id')->unsigned();

            $table->date('diagnosis_date');
            $table->enum('diagnosis_entity',['ESSALUD','MINSA','PARTICULAR'])->default('ESSALUD');

            $table->string('break_number');
            $table->date('break_start');
            $table->date('break_end');

            $table->enum('high_entity',['ESSALUD','MINSA','PARTICULAR'])->nullable();
            $table->date('high_date')->nullable();

            $table->timestamps();
            $table->foreign('infected_id')->references('id')->on('infecteds')
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
        Schema::dropIfExists('userinfecteds');
    }
}
