<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            
            $table->bigInteger('province_id')->unsigned()->nullable();

            $table->bigInteger('department_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('province_id')->references('id')->on('provinces')
                ->onUpdate('cascade');
            $table->foreign('department_id')->references('id')->on('departments')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     * -y
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('districts');
    }
}
