<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->nullable();
            
            $table->string('photo')->nullable();
            $table->date('birthday')->nullable();
            $table->enum('genre',['MASCULINO','FEMENINO'])->nullable();
            $table->string('phone')->nullable();
            
            
            $table->bigInteger('department_id')->unsigned()->nullable();
            $table->bigInteger('province_id')->unsigned()->nullable();
            $table->bigInteger('district_id')->unsigned()->nullable();
            
            $table->string('address')->nullable();

            
            $table->bigInteger('laboral_id')->unsigned()->nullable();
            $table->bigInteger('pension_id')->unsigned()->nullable();
            $table->bigInteger('position_id')->unsigned()->nullable();
            $table->bigInteger('condition_id')->unsigned()->nullable();

            $table->timestamps();

            //Relaciones

            

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade');

            $table->foreign('department_id')->references('id')->on('departments')
                ->onUpdate('cascade');
            
            $table->foreign('province_id')->references('id')->on('provinces')
                ->onUpdate('cascade');

            $table->foreign('district_id')->references('id')->on('districts')
                ->onUpdate('cascade');


            $table->foreign('laboral_id')->references('id')->on('laborals')
                ->onUpdate('cascade');
            $table->foreign('pension_id')->references('id')->on('pensions')
                ->onUpdate('cascade');
            $table->foreign('position_id')->references('id')->on('positions')
                ->onUpdate('cascade');
            $table->foreign('condition_id')->references('id')->on('conditions')
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
        Schema::dropIfExists('profiles');
    }
}
