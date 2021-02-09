<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicPositionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_position', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('aca_position_th');
            $table->string('aca_position_en');
            $table->string('aca_position_short_th');
            $table->string('aca_position_short_en');
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
        Schema::dropIfExists('academic_position');
    }
}
