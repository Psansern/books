<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_history', function (Blueprint $table) {
            $table->increments('id');
            $table->strings('level');
            $table->increments('teacher_id')->unsigned();
            $table->foreign('teacher_id')->references('id')->on('teacher');
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
        Schema::dropIfExists('education_history');
    }
}
